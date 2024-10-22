<?php 

namespace App\Model;

enum PetStatusEnum: string {
    case  WAITING = 'In waitlist';
    case AVAILABLE = 'Available for adoption';
    case PROCESSING = 'Processing entry';
}