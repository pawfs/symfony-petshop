<?php

namespace App\Model;

class Pet
{
    /**
     * @param array{0: int, 1: string} $age
     */
    public function __construct(
        private int $id,
        private string $name,
        private PetSpeciesEnum $species,
        private array $age,
        private PetStatusEnum $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): PetSpeciesEnum
    {
        return $this->species;
    }

    public function getSpeciesString(): string
    {
        return $this->species->value;
    }

    /**
     * @return array{0: int, 1: string}
     */
    public function getAge(): array
    {
        return $this->age;
    }

    public function getStatus(): PetStatusEnum
    {
        return $this->status;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSpecies(PetSpeciesEnum $species): void
    {
        $this->species = $species;
    }

    /**
     * @param array{0: int, 1: string} $age
     */
    public function setAge(array $age): void
    {
        $this->age = $age;
    }

    public function setStatus(PetStatusEnum $status): void
    {
        $this->status = $status;
    }
}
