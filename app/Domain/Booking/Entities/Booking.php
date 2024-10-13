<?php

namespace App\Domain\Booking\Entities;

use App\Domain\Booking\Enums\BookingStatus;
use Carbon\Carbon;

class Booking
{

    private string $id;
    private string $clientId;
    private string $tableId;
    private string $bookingDate;
    private BookingStatus $status;

    public function __construct(string $id, string $clientId, string $tableId, Carbon $bookingDate)
    {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->tableId = $tableId;
        $this->bookingDate = $bookingDate;
        $this->status = BookingStatus::PENDING;
    }

    public function confirmBooking()
    {
        if ($this->status !== BookingStatus::CANCELED) {
            $this->status = BookingStatus::CONFIRMED;
        } else {
            throw new \Exception("No se puede confirmar una reserva cancelada.");
        }
    }

    public function cancelBooking()
    {
        if ($this->status !== BookingStatus::CONFIRMED) {
            $this->status = BookingStatus::CANCELED;
        } else {
            throw new \Exception("No se puede cancelar una reserva ya confirmada.");
        }
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): BookingStatus
    {
        return $this->status;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getTableId(): string
    {
        return $this->tableId;
    }

    public function getBookingDate(): string
    {
        return $this->bookingDate;
    }

}
