<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{

    /**
     * @Route("/posts", name="posts", methods={"GET"})
     */
    public function getPosts(): JsonResponse
    {
        return new JsonResponse(
            [
                'posts' => [
                    ['id' => 1, 'title' => "FooBarness", 'content' => "Foo, Bar, Baz"],
                    ['id' => 2, 'title' => "BarBazness", 'content' => "Bar, Baz, Booze"],
                ],
            ], JsonResponse::HTTP_OK
        );
    }

}
