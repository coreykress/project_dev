<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\Type\UserType;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function userAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var User $user */
        $user = $em->getRepository('AppBundle:User')
            ->find($request->get('id'));

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $json = $this->get('serializer')->serialize(
            $user,
            'json',
            ['groups' => ['user']]
        );

        return new Response($json, Response::HTTP_OK, [
            'Content-Type' => 'application/json'
        ]);
    }

    public function usersAction()
    {
        $em = $this->getDoctrine()->getManager();

        /** @var User[] $user */
        $users = $em->getRepository('AppBundle:User')
            ->findAll();

        if (empty($users)) {
            return new JsonResponse(['message' => 'There are no users'], Response::HTTP_NOT_FOUND);
        }

        $json = $this->get('serializer')->serialize(
            $users,
            'json',
            ['groups' => ['user']]
        );

        return new Response($json, Response::HTTP_OK, [
            'Content-Type' => 'application/json'
        ]);
    }

    //TODO: create User service
    public function createUserAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        } else {
            return $form;
        }

        return new JsonResponse(['status' => 'success'], Response::HTTP_CREATED);
    }

    public function updateUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var User $user */
        $user = $em->getRepository('AppBundle:User')
            ->find($request->get('id'));

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all(), false);//false makes put actually patch
        if ($form->isValid()) {
            $em->persist($user);
            $em->flush();
        } else {
            return $form;
        }

        return new JsonResponse(['status' => 'success'], Response::HTTP_OK);
    }

    public function archiveUserAction(Request $request)
    {
//        $em = $this->getDoctrine()->getManager();
//
//        /** @var User $user */
//        $user = $em->getRepository('AppBundle:User')
//            ->find($request->get('id'));
//
//        $user->setIs(true)
    }
}