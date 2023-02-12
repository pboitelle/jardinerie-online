<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/api/users/achat-coins/{id}', name: 'app_user_achat_coins', methods: ['PATCH'])]
    public function achatCoins(Request $request, ValidatorInterface $validator, User $user)
    {
        $data = json_decode($request->getContent(), true);

        $user->setNbCoin($data['nb_coin']);

        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return new JsonResponse(['error' => (string) $errors], 400);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return new JsonResponse(['id' => $user->getId()]);
    }
}
