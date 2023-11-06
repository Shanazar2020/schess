<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController extends AbstractController
{
    #[Route(name: '/')]
    public function index(): JsonResponse
    {
        return $this->json([
            'name' => 'schess-service',
            'path' => ''
        ]);
    }
}