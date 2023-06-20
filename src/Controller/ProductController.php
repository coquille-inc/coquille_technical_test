<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_list', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('product/list.html.twig', []);
    }

    #[Route('/api/product/helloword/{name}', name: 'api_helloword')]
    public function apiHelloword(string $name): Response
    {
        return new JsonResponse('Hello ' . $name . ' !');
    }
}
