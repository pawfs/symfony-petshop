<?php

namespace App\Controller;

use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(PetRepository $petRepository): Response
    {
        $pets = $petRepository->findAll();
        $myPet = $pets[array_rand($pets)];

        return $this->render('main/homepage.html.twig', [
            'myPet' => $myPet,
            'pets' => $pets,
        ], );
    }
}
