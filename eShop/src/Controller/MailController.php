<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    /**
     * @Route("/maildev", name="maildev")
     */
    public function index(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('webdev.idf@gmail.com')
            ->to('arcamax77@gmail.com')
            ->subject('Essai')
            ->text('Ceci est un test');

        $mailer->send($email);


        return $this->render('maildev/maildev.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }
}