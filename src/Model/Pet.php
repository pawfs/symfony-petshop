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
    private string $species,
    private array $age,
    private string $status
  ) {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getSpecies(): string
  {
    return $this->species;
  }

  /**
   * @return array{0: int, 1: string}
   */
  public function getAge(): array
  {
    return $this->age;
  }

  public function getStatus(): string
  {
    return $this->status;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setSpecies(string $species): void
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

  public function setStatus(string $status): void
  {
    $this->status = $status;
  }
}
