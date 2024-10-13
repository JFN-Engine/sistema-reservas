<?php

namespace App\Domain\Booking\Repositories;

use App\Domain\Booking\Entities\Booking;

interface IBookingRepository
{
    public function save(Booking $reserva): Booking;

    public function findById(int $id): ?Booking;

    public function findAll(): array;
}
