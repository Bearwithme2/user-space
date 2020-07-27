<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="api-entry", methods={"GET"})
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(['hello' => 'world'], JsonResponse::HTTP_OK);
    }
}