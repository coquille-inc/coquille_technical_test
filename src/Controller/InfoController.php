<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{
    #[Route('/info', name: 'info_index', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('info/index.html.twig', []);
    }
}