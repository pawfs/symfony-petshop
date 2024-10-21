<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $petCount = 57;

        $myPet = [
          'name' => 'Pompom',
          'species' => 'Cat',
          'age' => [3, 'months'],
          'status' => 'Available',
        ];
        
        return $this->render('main/homepage.html.twig', [
          'numberOfPets' => $petCount,
          'myPet' => $myPet,
        ],);
    }
}
