<?php

namespace App\Controller;

use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PetController extends AbstractController
{
  
  // public function list(): Response
  // {
  //   // Your logic to fetch and display the list of pets
  //   return $this->render('pet/list.html.twig', [
  //     'pets' => [], // Replace with actual data
  //   ]);
  // }

  #[Route('/pets/{id<\d+>}',name: 'app_pet_show')]
  public function show(int $id, PetRepository $petRepository): Response
  {
    $pet = $petRepository->find($id);

    if (!$pet) {
      throw $this->createNotFoundException('Pet not found');
    }

    return $this->render('pet/show.html.twig', [
      'pet' => $pet,
    ]);
  }
}