<?php

namespace App\Controller;


use App\Form\NewspaperType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewspapersController extends AbstractController
{
    #[Route('/newspapers', name: 'app_newspapers')]
    public function index(): Response
    {
        $formulaire3 = $this->createForm(NewspaperType::class);

        return $this->renderForm('newspapers/index.html.twig', [
            'controller_name' => 'NewspapersController',
            'Formulaire3'=>$formulaire3
        ]);
    }
}
