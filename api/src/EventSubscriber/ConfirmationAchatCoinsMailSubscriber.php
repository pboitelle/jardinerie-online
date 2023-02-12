<?php
// api/src/EventSubscriber/ConfirmationAchatCoinsMailSubscriber.php

namespace App\EventSubscriber;

use App\Entity\User;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\Symfony\EventListener\EventPriorities;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class ConfirmationAchatCoinsMailSubscriber implements EventSubscriberInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return [
            JsonResponse::class => 'sendMail',
        ];
    }

    public function sendMail(JsonResponse $response): void
    {
        $data = $response->getData();

        if (isset($data['id'])) {
            // $user = $this->getDoctrine()->getRepository(User::class)->find($data['id']);

            $message = (new Email())
                ->from('
                pierre.boitelle@gmail.com')
                ->to('
                pierre.boitelle@gmail.com')
                ->subject('Vous venez d\'acheter des coins')
                ->text('Vous venez d\'acheter des coins');

            $this->mailer->send($message);
        }
    }
}