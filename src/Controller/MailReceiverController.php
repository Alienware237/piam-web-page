<?php

declare(strict_types=1);

namespace okpt\my\web\page\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

class MailReceiverController extends AbstractController
{
    /**
     * @Route("", name="send_email", methods={"POST"})
     */
    public function sendEmail(Request $request, ValidatorInterface $validator): Response
    {
        // Create a Transport object
        $transport = Transport::fromDsn('smtp://piamkevin67@gmail.com:mrukwljkaniayweu@smtp.gmail.com:465');

        // Retrieve form data
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $messageContent = $request->request->get('message');

        // Validate form data
        $errors = $validator->validate([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $messageContent
        ], new Assert\Collection([
            'name' => new Assert\NotBlank(['message' => 'Name is required']),
            'subject' => new Assert\NotBlank(['message' => 'Subject is required']),
            'email' => [
                new Assert\NotBlank(['message' => 'Email is required']),
                new Assert\Email(['message' => 'Invalid email format']),
            ],
            'message' => new Assert\NotBlank(['message' => 'Message is required'])
        ]));

        // If there are validation errors, return error response
        if (count($errors) > 0) {
            return $this->render('Components/acknowledgement', ['success' => false, 'message' => 'Failed to send email: Validation failed.' . "\n\n" . 'Please return in the home page of Talom digital art and try again', 'error' => $errors]);
        }

        // Compose the email
        $email = (new Email())
            ->from('piamkevin67@gmail.com')
            ->to('talomkevin2017@gmail.com')
            ->subject("Talom Digital Art: <<" . $subject . ">>")
            ->text('Hello Kevin' . "\n\n" . $messageContent . "\n\n" . "Best regard" . "\n\n" . "Your User " . $name . "\n\n" . "E-mail: " . $email);

        try {
            $mailer = new Mailer($transport);
            // Send the email
            $mailer->send($email);

            // Return success response
            return $this->render('Components/acknowledgement.html.twig', ['success' => 'success', 'message' => 'Email sent successfully!' ."\n\n" . 'You can now return in the home page of Talom digital art']);
        } catch (TransportExceptionInterface $e) {
            // Return error response
            return $this->render('Components/acknowledgement.html.twig', ['success' => false, 'message' => 'Failed to send email. please return in the home page of Talom digital art and try again', 'error' => $e->getMessage()]);
        }
    }
}
