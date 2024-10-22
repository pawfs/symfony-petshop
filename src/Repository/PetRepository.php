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
        $pets = [
            new Pet(1, 'Mittens', PetSpeciesEnum::CAT, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(2, 'Whiskers', PetSpeciesEnum::CAT, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(3, 'Shadow', PetSpeciesEnum::CAT, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(4, 'Simba', PetSpeciesEnum::CAT, [4, 'years'], PetStatusEnum::PROCESSING),
            new Pet(5, 'Luna', PetSpeciesEnum::CAT, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(6, 'Oliver', PetSpeciesEnum::CAT, [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(7, 'Leo', PetSpeciesEnum::CAT, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(8, 'Milo', PetSpeciesEnum::CAT, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(9, 'Charlie', PetSpeciesEnum::CAT, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(10, 'Max', PetSpeciesEnum::CAT, [5, 'years'], PetStatusEnum::PROCESSING),
            new Pet(11, 'Bella', PetSpeciesEnum::CAT, [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(12, 'Lucy', PetSpeciesEnum::CAT, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(13, 'Chloe', PetSpeciesEnum::CAT, [2, 'years'], PetStatusEnum::PROCESSING),
            new Pet(14, 'Lily', PetSpeciesEnum::CAT, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(15, 'Sophie', PetSpeciesEnum::CAT, [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(16, 'Nala', PetSpeciesEnum::CAT, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(17, 'Zoe', PetSpeciesEnum::CAT, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(18, 'Cleo', PetSpeciesEnum::CAT, [4, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(19, 'Daisy', PetSpeciesEnum::CAT, [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(20, 'Misty', PetSpeciesEnum::CAT, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(21, 'Buddy', PetSpeciesEnum::DOG, [5, 'months'], PetStatusEnum::WAITING),
            new Pet(22, 'Rocky', PetSpeciesEnum::DOG, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(23, 'Duke', PetSpeciesEnum::DOG, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(24, 'Bear', PetSpeciesEnum::DOG, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(25, 'Toby', PetSpeciesEnum::DOG, [4, 'years'], PetStatusEnum::PROCESSING),
            new Pet(26, 'Jack', PetSpeciesEnum::DOG, [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(27, 'Teddy', PetSpeciesEnum::DOG, [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(28, 'Riley', PetSpeciesEnum::DOG, [7, 'months'], PetStatusEnum::WAITING),
            new Pet(29, 'Bailey', PetSpeciesEnum::DOG, [8, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(30, 'Buster', PetSpeciesEnum::DOG, [9, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(31, 'Coco', PetSpeciesEnum::DOG, [10, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(32, 'Lucky', PetSpeciesEnum::DOG, [11, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(33, 'Sam', PetSpeciesEnum::DOG, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(34, 'Oscar', PetSpeciesEnum::DOG, [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(35, 'Gizmo', PetSpeciesEnum::DOG, [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(36, 'Rusty', PetSpeciesEnum::DOG, [4, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(37, 'Boomer', PetSpeciesEnum::DOG, [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(38, 'Scout', PetSpeciesEnum::DOG, [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(39, 'Rex', PetSpeciesEnum::DOG, [7, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(40, 'Bruno', PetSpeciesEnum::DOG, [8, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(41, 'Thumper', PetSpeciesEnum::RABBIT, [3, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(42, 'Bugs', PetSpeciesEnum::RABBIT, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(43, 'Bambi', PetSpeciesEnum::RABBIT, [2, 'years'], PetStatusEnum::WAITING),
            new Pet(44, 'Cottontail', PetSpeciesEnum::RABBIT, [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(45, 'Goldie', PetSpeciesEnum::FISH, [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(46, 'Bubbles', PetSpeciesEnum::FISH, [9, 'months'], PetStatusEnum::PROCESSING),
            new Pet(47, 'Nemo', PetSpeciesEnum::FISH, [3, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(48, 'Shelly', PetSpeciesEnum::REPTILE, [5, 'years'], PetStatusEnum::WAITING),
            new Pet(49, 'Speedy', PetSpeciesEnum::REPTILE, [2, 'years'], PetStatusEnum::WAITING),
            new Pet(50, 'Crush', PetSpeciesEnum::REPTILE, [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(51, 'Cici', PetSpeciesEnum::BIRD, [3, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(52, 'Polly', PetSpeciesEnum::BIRD, [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(53, 'Kiwi', PetSpeciesEnum::BIRD, [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(54, 'Hamtaro', PetSpeciesEnum::RODENT, [2, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(55, 'Bijou', PetSpeciesEnum::RODENT, [1, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(56, 'Oxnard', PetSpeciesEnum::RODENT, [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(57, 'Nanu', PetSpeciesEnum::OTHER, [10, 'years'], PetStatusEnum::WAITING),
        ];

        return $pets;
    }
}
