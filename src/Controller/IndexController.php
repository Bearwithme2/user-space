<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/user", name="user", methods={"GET"})
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(
            [
                'form' => [
                    'name' => 'Babyliza',
                    'surname' => 'Medoranda',
                    'email' => 'el@el.el',
                    'password' => '',
                ],
            ], JsonResponse::HTTP_OK
        );
    }
}
