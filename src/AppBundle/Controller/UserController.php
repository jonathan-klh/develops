<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 05/01/18
 * Time: 15:44
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\UserSkill;
use AppBundle\Form\UserSkillType;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @Route("/profile/show/{username}", name="show_user")
     */
    public function showUser($username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(['username' => $username]);
        $lastReviews = $em->getRepository('AppBundle:Review')->findLastReviewsByUser($user);

        return $this->render('@FOSUser/More/show_user.html.twig', array(
            'user' => $user,
            'lastReviews' => $lastReviews,
        ));
    }

    /**
     * @Route("/profile/show/{username}/reviews", name="show_avis_user")
     */
    public function showAvisUser($username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(['username' => $username]);
        $lastReviews = $em->getRepository('AppBundle:Review')->findLastReviewsByUser($user);

        return $this->render('@FOSUser/More/show_avis_user.html.twig', array(
            'user' => $user,
            'lastReviews' => $lastReviews,
        ));
    }

    /**
     * @Route("/profile/informations", name="informations")
     */
    public function modifsInfosAction(Request $request) {
        $user = $this->getUser();
        $userSkill = new UserSkill();

        $form = $this->createForm(UserType::class, $user);
        $formSkill = $this->createForm(UserSkillType::class, $userSkill);

        $form->handleRequest($request);
        $formSkill->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('fos_user_profile_show');
        }

        if ($formSkill->isSubmitted() && $formSkill->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $userSkill->setUser($user);
            $em->persist($userSkill);
            $em->flush();

            return $this->redirectToRoute('informations');
        }

        return $this->render('@FOSUser/More/edit_infos.html.twig', array(
            'form' => $form->createView(),
            'formSkill' => $formSkill->createView(),
        ));
    }
}