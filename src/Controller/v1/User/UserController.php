<?php

namespace App\Controller\v1\User;

use App\Controller\v1\MainController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends MainController
{
    /**
     * @Route(path: '/user', name: 'app_user_index', methods: ['GET'])
     */
    public function index(Request $request): JsonResponse
    {
        return $this->json([
            'name' => 'schess-service',
            'path' => '/user'
        ]);
    }

}