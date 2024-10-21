<?php

namespace App\Controller;

use App\Model\Pet;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsApiController extends AbstractController
{
  #[Route('/api/pets')]
  public function getCollection(LoggerInterface $loggerInterface): Response {
    $loggerInterface->info('Fetching all pets');
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