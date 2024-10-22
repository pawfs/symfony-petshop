<?php

namespace App\Repository;

use App\Model\Pet;
use App\Model\PetSpeciesEnum;
use App\Model\PetStatusEnum;
use Psr\Log\LoggerInterface;

class PetRepository
{
    public function __construct(private LoggerInterface $loggerInterface)
    {
    }

    public function find(int $id): ?Pet
    {
        $this->loggerInterface->info('Fetching pet with id: '.$id);
        $pets = $this->findAll();
        foreach ($pets as $pet) {
            if ($pet->getId() === $id) {
                return $pet;
            }
        }

        return null;
    }

    public function findAll(): array
    {
        $this->loggerInterface->info('Fetching all pets');
        $jsonPetsFilePath =__DIR__ . '/../Data/pets.json';
        $petsData = json_decode(file_get_contents($jsonPetsFilePath), true);
        $pets = [];

        foreach ($petsData as $petData){
          $pets[] = new Pet(
            $petData['id'],
            $petData['name'],
            PetSpeciesEnum::from($petData['species']),
            $petData['age'],
            PetStatusEnum::from($petData['status']),
          );
        }

        return $pets;
    }
}
