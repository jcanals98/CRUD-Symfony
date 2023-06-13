<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class UserController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    public function index(){
        return $this->render('user/users.html.twig');
    }

    public function getUsers(){

        //$em = $this->getDoctrine()->getManager();
        $em = $this->doctrine->getManager();
        $listUsers = $em->getRepository('App:Users')->findBy([], ['name' => 'ASC']);
        return $this->render('user/users.html.twig', [
            'listUsers' => $listUsers
        ]);
    }

    public function createUser(Request $request){
        $em = $this->doctrine->getManager();

        $users = new \App\Entity\Users();

        $form_users = $this->createForm(\App\Form\UserType::class, $users);
        $form_users->handleRequest($request);

        if($form_users->isSubmitted() && $form_users->isValid()){
            $users->setStatus(1);
            $em->persist($users);
            $em->flush();

            return $this->redirectToRoute('getUsers');
        }

        return $this->render('user/user_create.html.twig',[
            'form_users' => $form_users->createView()
        ]);
    }

    public function updateUser(Request $request,$id){
        $em = $this->doctrine->getManager();

        $user = $em->getRepository('App:Users')->findBy($id);

        $form_user = $this->createForm(\App\Form\UserType::class, $user);
        $form_user->handleRequest($request);

        if($form_user->isSubmitted() && $form_user->isValid()){
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('getUsers');
        }

        return $this->render('user/user_update.html.twig',[
            'form_user' => $form_user->createView()
        ]);

    }

    public function deleteUser($id){
        $em = $this->doctrine->getManager();

        $user = $em->getRepository('App:Users')->findBy($id);

        $user->setStatus(0);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('getUsers');
    }
}
