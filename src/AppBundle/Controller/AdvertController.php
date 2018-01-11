<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Advert;
use AppBundle\Entity\AdvertMessage;
use AppBundle\Entity\User;
use AppBundle\Form\AdvertMessageType;
use AppBundle\Form\AdvertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\ReviewService;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdvertController extends Controller
{
    /**
     * @Route("/adverts", name="advert_index")
     */
    public function indexAction()
    {
        $adverts = $this->getDoctrine()->getRepository('AppBundle:Advert')->findAll();

        return $this->render('advert/index.html.twig', [
            'adverts' => $adverts,
        ]);
    }

    /**
     * @Route("/advert/new", name="advert_new")
     */
    public function newAction(Request $request)
    {
        $advert = new Advert();
        $form = $this->createForm(AdvertType::class, $advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $advert->setCreatedBy($this->getUser());
            $em->persist($advert);
            $em->flush();
            return $this->redirectToRoute('advert_index');
        }


        return $this->render('advert/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/advert/{id}/edit", name="advert_edit")
     */
    public function editAction(Request $request, Advert $advert)
    {
        $form = $this->createForm(AdvertType::class, $advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('advert_index');
        }


        return $this->render('advert/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/advert/{id}/show", name="advert_detail")
     */
    public function detailAction(Request $request, Advert $advert)
    {
        $advertMessage = new AdvertMessage();
        $formAdvertContact = $this->createForm(AdvertMessageType::class, $advertMessage);
        $formAdvertContact->handleRequest($request);

        if ($formAdvertContact->isSubmitted() && $formAdvertContact->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $advertMessage->setUser($this->getUser());
            $advertMessage->setAdvert($advert);
            $em->persist($advertMessage);
            $em->flush();

            return $this->redirectToRoute('advert_apply', array(
                'id' => $advert->getId(),
            ));
        }


        return $this->render('advert/show.html.twig', [
            'advert' => $advert,
            'formAdvertContact' => $formAdvertContact->createView(),
        ]);
    }

    /**
     * @Route("/advert/{id}/delete", name="advert_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Advert $advert){
        $em = $this->getDoctrine()->getManager();

        $id = $advert->getId();

        try
        {
            $em->remove($advert);
            $em->flush();
        }
        catch(\Exception $e)
        {
            return new JsonResponse($e->getMessage(),400);
        }

        return new JsonResponse(['response' => 'yes' ,'id' => $id],200);

    }

    /**
     * @Route("/adverts/my", name="advert_my")
     */
    public function myAdvertsAction()
    {
        $user = $this->getUser();
        $adverts = $this->getDoctrine()->getRepository('AppBundle:Advert')->findBy(['createdBy' => $user], ['createdDate' => 'DESC']);

        return $this->render('advert/index.html.twig', [
            'adverts' => $adverts
        ]);
    }

    /**
     * @Route("/advert/{id}/apply", name="advert_apply")
     */
    public function applyAction(Advert $advert)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $advert->getCandidates()->add($user);
        $user->getAdverts()->add($advert);

        $em->persist($advert);
        $em->persist($user);

        $em->flush();

        return $this->redirectToRoute('advert_index');
    }

    /**
     * @Route("/advert/{id}/candidates", name="advert_candidates")
     */
    public function showCandidateAction(Advert $advert)
    {
        if ($advert->getCandidateSelected()){
            throw new AccessDeniedException('A candidate has already been selected');
        }

        $candidates = $advert->getCandidates()->getValues();

        return $this->render('advert/candidates.html.twig', [
            'candidates' => $candidates,
            'advert' => $advert
        ]);
    }

    /**
     * @Route("/advert/{id}/addreview", name="advert_add_review")
     */
    public function addReviewAction(Advert $advert, ReviewService $reviewService)
    {
        $user = $this->getUser();
        if ($user == $advert->getCreatedBy()) {
            $form = $reviewService->getFormReview($advert);
            if($form === true) {
                return $this->redirectToRoute('advert_edit', array('advert' => $advert));
            } else {
                return $this->render('advert/add_review.html.twig', [
                    'form' => $form,
                ]);
            }
        } else {
            return $this->redirectToRoute('advert_index');
        }
    }

    /**
     * @Route("/advert/{id}/candidate-selected/{idCandidate}", name="advert_select_candidate")
     * @ParamConverter("idCandidate", class="AppBundle:User")
     */
    public function selectCandidateAction(Request $request, Advert $advert)
    {
        if ($advert->getCandidateSelected()){
            throw new AccessDeniedException('A candidate has already been selected');
        }

        $user = $request->get('idCandidate');
        $em = $this->getDoctrine()->getManager();

        try{
            $advert->setCandidateSelected($user);
            $advert->setStatus('in progress');
            $em->persist($advert);
            $em->flush();

        }catch ( \Exception $e ){
            return new JsonResponse($e->getMessage(),400);
        }

        return $this->redirectToRoute('advert_detail', [ 'id' => $advert->getId()]);
    }
}