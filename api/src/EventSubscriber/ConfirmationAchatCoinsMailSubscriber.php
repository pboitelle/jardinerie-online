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
            KernelEvents::VIEW => ['sendMail', EventPriorities::POST_WRITE],
        ];
    }

    public function sendMail(ViewEvent $event): void
    {
        $user = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$user instanceof User || Request::METHOD_PATCH !== $method) {
            return;
        }

        $message = (new Email())
            ->from('pierre.boitelle@gmail.com')
            ->to('pierre.boitelle@gmail.com')
            ->subject('New coins !')
            ->text('You have new coins !');

        $this->mailer->send($message);
    }
}