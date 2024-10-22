<?php

namespace App\Controller;

use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/pets')]
class PetApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(PetRepository $petRepository): Response
    {
        $pets = $petRepository->findAll();

        return $this->json($pets);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, PetRepository $petRepository): Response
    {
        $pet = $petRepository->find($id);

        if (!$pet) {
            return $this->json(['error' => 'Pet not found'], 404);
            // throw $this->createNotFoundException('Starship not found');
        }

        return $this->json($pet);
    }
}
