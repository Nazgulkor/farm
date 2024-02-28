<?php

namespace App\Farm\Livestocks;

use App\Farm\Entities\LivestockEntity;
use App\Farm\Interfaces\LivestockInterface;
use App\Farm\Interfaces\ProductInterface;
use App\Farm\Products\EggProduct;

class ChickenLivestock extends LivestockEntity implements LivestockInterface
{
    public function makeProduct(): ?ProductInterface
    {
        return $this->canMakeProduct() ? new EggProduct : null;
    }

    public function getType(): string
    {
        return 'chicken';
    }

    private function canMakeProduct(): bool
    {
        return (bool) rand(0, 1);
    }
}
