<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 05/01/18
 * Time: 15:44
 */

namespace AppBundle\Controller;

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

        return $this->render('@FOSUser/More/show_user.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * @Route("/profile/informations", name="informations")
     */
    public function modifsInfosAction(Request $request) {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('@FOSUser/More/edit_infos.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}