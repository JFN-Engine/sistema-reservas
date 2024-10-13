<?php

namespace App\Domain\Table\Entities;

use App\Domain\Table\Enums\TableStatus;

class Table
{
    private int $id;
    private int $capacity;
    private TableStatus $status;

    public function __construct(int $id, int $capacity, TableStatus $status)
    {
        $this->id = $id;
        $this->capacity = $capacity;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function getStatus(): TableStatus
    {
        return $this->status;
    }

    public function reserve(): void
    {
        if ($this->status !== TableStatus::AVAILABLE) {
            throw new \DomainException("La mesa no está disponible para reservar.");
        }
        $this->status = TableStatus::RESERVED;
    }

    public function free(): void
    {
        $this->status = TableStatus::AVAILABLE;
    }
}
