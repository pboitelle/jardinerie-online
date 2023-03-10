<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[AsController]
class UserController extends AbstractController
{
    public function __construct(
        private RequestStack $requestStack,
        private ManagerRegistry $managerRegistry
    ) {}

    public function __invoke()
    {
        $request = $this->requestStack->getCurrentRequest();
        $user = $this->managerRegistry->getRepository(User::class)->find($request->get('id'));


        $user->setNbCoin($user->getNbCoin() + 10);

        $em = $this->managerRegistry->getManager();

        if (!$user) {
            return $this->createNotFoundException();
        }

        $em->persist($user);
        $em->flush();

        return $this->json([
            'code' => 200,
            'message' => 'success',
            'data' => $user
        ]);
    }
}
