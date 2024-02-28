<?php

namespace App\Farm\Interfaces;

interface ProductInterface
{
    public function getType(): string;

    public function getUnit(): string;

    public function getValue(): int;
}
