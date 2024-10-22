<?php

namespace App\Model;

enum PetSpeciesEnum: string
{
    case CAT = 'Cat';
    case DOG = 'Dog';
    case RABBIT = 'Rabbit';
    case FISH = 'Fish';
    case REPTILE = 'Reptile';
    case BIRD = 'Bird';
    case RODENT = 'Rodent';
    case OTHER = 'other';
}