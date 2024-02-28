<?php

namespace App\Farm\Products;

use App\Farm\Entities\ProductEntity;
use App\Farm\Interfaces\ProductInterface;

class MilkProduct extends ProductEntity implements ProductInterface
{
    public int $liter;

    public function __construct()
    {
        $this->liter = rand(8, 12);
    }

    public function getValue(): int
    {
        return $this->liter;
    }

    public function getUnit(): string
    {
        return 'liters';
    }

    public function getType(): string
    {
        return 'milk';
    }
}
