<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Controller\IndexController;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexControllerTest extends KernelTestCase
{

    public function testIndex(): void
    {
        $indexController = new IndexController();
        $response = $indexController->index();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }
}
