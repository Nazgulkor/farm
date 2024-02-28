<?php

namespace App\Farm\Interfaces;

interface LivestockInterface
{
    public function makeProduct(): ?ProductInterface;

    public function getId(): int;

    public function setId(int $id): void;

    public function getType(): string;
}
