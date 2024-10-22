<?php

namespace App\Repository;

use App\Model\Pet;
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
            new Pet(1, 'Mittens', 'Cat', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(2, 'Whiskers', 'Cat', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(3, 'Shadow', 'Cat', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(4, 'Simba', 'Cat', [4, 'years'], PetStatusEnum::PROCESSING),
            new Pet(5, 'Luna', 'Cat', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(6, 'Oliver', 'Cat', [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(7, 'Leo', 'Cat', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(8, 'Milo', 'Cat', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(9, 'Charlie', 'Cat', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(10, 'Max', 'Cat', [5, 'years'], PetStatusEnum::PROCESSING),
            new Pet(11, 'Bella', 'Cat', [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(12, 'Lucy', 'Cat', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(13, 'Chloe', 'Cat', [2, 'years'], PetStatusEnum::PROCESSING),
            new Pet(14, 'Lily', 'Cat', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(15, 'Sophie', 'Cat', [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(16, 'Nala', 'Cat', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(17, 'Zoe', 'Cat', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(18, 'Cleo', 'Cat', [4, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(19, 'Daisy', 'Cat', [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(20, 'Misty', 'Cat', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(21, 'Buddy', 'Dog', [5, 'months'], PetStatusEnum::WAITING),
            new Pet(22, 'Rocky', 'Dog', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(23, 'Duke', 'Dog', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(24, 'Bear', 'Dog', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(25, 'Toby', 'Dog', [4, 'years'], PetStatusEnum::PROCESSING),
            new Pet(26, 'Jack', 'Dog', [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(27, 'Teddy', 'Dog', [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(28, 'Riley', 'Dog', [7, 'months'], PetStatusEnum::WAITING),
            new Pet(29, 'Bailey', 'Dog', [8, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(30, 'Buster', 'Dog', [9, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(31, 'Coco', 'Dog', [10, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(32, 'Lucky', 'Dog', [11, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(33, 'Sam', 'Dog', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(34, 'Oscar', 'Dog', [2, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(35, 'Gizmo', 'Dog', [3, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(36, 'Rusty', 'Dog', [4, 'years'], PetStatusEnum::AVAILABLE),
            new Pet(37, 'Boomer', 'Dog', [5, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(38, 'Scout', 'Dog', [6, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(39, 'Rex', 'Dog', [7, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(40, 'Bruno', 'Dog', [8, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(41, 'Thumper', 'Rabbit', [3, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(42, 'Bugs', 'Rabbit', [1, 'year'], PetStatusEnum::AVAILABLE),
            new Pet(43, 'Bambi', 'Rabbit', [2, 'years'], PetStatusEnum::WAITING),
            new Pet(44, 'Cottontail', 'Rabbit', [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(45, 'Goldie', 'Fish', [4, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(46, 'Bubbles', 'Fish', [9, 'months'], PetStatusEnum::PROCESSING),
            new Pet(47, 'Nemo', 'Fish', [3, 'months'], PetStatusEnum::AVAILABLE),
            new Pet(48, 'Shelly', 'Turtle', [5, 'years'], PetStatusEnum::WAITING),
            new Pet(49, 'Speedy', 'Turtle', [2, 'years'], PetStatusEnum::WAITING),
            new Pet(50, 'Crush', 'Turtle', [1, 'year'], PetStatusEnum::AVAILABLE),
        ];

        return $pets;
    }
}
