<?php

namespace App\Farm\Products;

use App\Farm\Entities\ProductEntity;
use App\Farm\Interfaces\ProductInterface;

class EggProduct extends ProductEntity implements ProductInterface
{
    public function getType(): string
    {
        return 'egg';
    }

    public function getUnit(): string
    {
        return 'pieces';
    }

    public function getValue(): int
    {
        return 1;
    }
}
