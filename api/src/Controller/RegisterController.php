<?php
// api/src/Controller/CreateBookPublication.php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

#[AsController]
class RegisterController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private RequestStack $request,
        private UserPasswordHasherInterface $passwordHasher,
    ) {}

    public function __invoke()
    {
        dd("function __invoke");

        $request = $this->requestStack->getCurrentRequest();
        $em = $this->managerRegistry->getManager();

        $body = json_decode($request->getContent());

        $email = $body->email;
        $password = $body->password;
        $role = "ROLE_USER";

        $user = new User();
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            $password
        );
        $user->setEmail($email);
        $user->setRoles([$role]);

        $user->setIsPasswordRequest(false);
        $user->setPassword($hashedPassword);

    }

    public function signUpHandler(SignUpRequest $signUpRequest): JsonResponse
    {
        dd("function signUpHandler");
        if(!$this->signUpValidator->validate($signUpRequest)){
            return new JsonResponse([
                'status' => Response::HTTP_BAD_REQUEST,
                'errors' => $this->signUpValidator->getErrors()
            ]);
        }

        $user = $this->userCreator->createUser($signUpRequest);

        return new JsonResponse([
            'status' => Response::HTTP_OK,
            'entity' => $user->getId()
        ]);
    }
}