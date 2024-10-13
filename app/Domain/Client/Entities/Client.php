<?php

namespace App\Domain\Client\Entities;

use App\Domain\Booking\Enums\ClientStatus;


class Client
{
    private int $id;
    private string $name;
    private string $email;
    private ClientStatus $status;

    public function __construct(int $id, string $name, string $email, ClientStatus $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getStatus(): ClientStatus
    {
        return $this->status;
    }

    public function activate(): void
    {
        $this->status = ClientStatus::ACTIVE;
    }

    public function deactivate(): void
    {
        $this->status = ClientStatus::INACTIVE;
    }
}
