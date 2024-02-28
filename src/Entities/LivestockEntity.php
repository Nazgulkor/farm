<?php

namespace App\Farm\Entities;

abstract class LivestockEntity
{
    private int $id;

    public function __construct()
    {
        $this->setId(rand());
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
