<?php

namespace App\Farm\Livestocks;

use App\Farm\Entities\LivestockEntity;
use App\Farm\Interfaces\LivestockInterface;
use App\Farm\Interfaces\ProductInterface;
use App\Farm\Products\MilkProduct;

class CowLivestock extends LivestockEntity implements LivestockInterface
{
    public function makeProduct(): ?ProductInterface
    {
        return new MilkProduct;
    }
    public function getType(): string
    {
        return 'cow';
    }
}
