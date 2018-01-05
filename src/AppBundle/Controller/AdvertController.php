<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Advert;
use AppBundle\Entity\Candidate;
use AppBundle\Entity\User;
use AppBundle\Form\AdvertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/advert/{id}/delete", name="advert_delete")
     */
    public function deleteAction(Advert $advert){
        $em = $this->getDoctrine()->getManager();

        try
        {
            $em->remove($advert);
            $em->flush();
        }
        catch(\Exception $e)
        {
            return new JsonResponse($e->getMessage(),400);
        }

        return new JsonResponse('ok',200);

    }

    /**
     * @Route("/adverts/my", name="advert_my")
     */
    public function myAdvertsAction()
    {
        $user = $this->getUser();
        $adverts = $this->getDoctrine()->getRepository('AppBundle:Advert')->findBy(['createdBy' => $user]);

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
//        $candidat = new Candidate();
//        $candidat->setUser($user);
//        $candidat->setAdvert($advert);
        $em->persist($advert);

        $em->flush();

//        $em->persist($candidat);


        return $this->redirectToRoute('advert_index');
    }
}