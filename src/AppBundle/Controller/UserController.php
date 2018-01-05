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
     * @Route("/informations", name="informations")
     */
    public function modifsInfosAction(Request $request) {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('informations/edit_infos.html.twig', array(
            'form' => $form->createView()
        ));
    }
}