<?php

namespace App\Domain\Table\Enums;

enum TableStatus: string
{
    case AVAILABLE = 'available';
    case RESERVED = 'reserved';
    case OCCUPIED = 'occupied';
}
