<?php

namespace App\Controller;

use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsApiController extends AbstractController
{
    #[Route('/api/pets')]
    public function getCollection(PetRepository $petRepository): Response
    {
        $pets = $petRepository->findAll();

        return $this->json($pets);
    }
}
