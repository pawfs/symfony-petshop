<?php

namespace App\Controller;

use App\Model\Pet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsApiController extends AbstractController
{
  #[Route('/api/pets')]
  public function getCollection(): Response {
    $pets = [
      new Pet(
        1,
        'Buddy', 
        'Dog', 
        [5, 'months'], 
        'Available',
      ),
      new Pet( 
        2,
        'Mittens', 
        'Cat', 
        [2, 'years'], 
        'Adopted',
      ),
      new Pet(
        1, 
        'Goldie',
        'Fish', 
        [4, 'months'], 
        'Available',
      )
    ];

    return $this->json($pets);
  }
}