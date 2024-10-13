<?php

namespace App\Domain\Schedule\Entities;

class Schedule
{
    private int $id;
    private int $clientId;
    private \DateTime $dateTime;
    private string $description;

    public function __construct(int $id, int $clientId, \DateTime $dateTime, string $description)
    {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->dateTime = $dateTime;
        $this->description = $description;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
