<?php

namespace App\Farm;

use App\Farm\Interfaces\LivestockInterface;
use App\Farm\Interfaces\ProductInterface;

class Barn
{
    /** @var array<string, LivestockInterface[]> $livestocks */
    private array $livestocks = [];

    /** @var array<string, ProductInterface[]> $products */
    private array $products = [];

    public function getLivestocks()
    {
        return $this->livestocks;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addLivestock(LivestockInterface $livestock): static
    {
        $this->livestocks[$livestock->getType()][] = $livestock;

        return $this;
    }

    public function collectProducts(): static
    {
        /** @var LivestockInterface[] $livestocks */
        $livestocks = array_values($this->livestocks);
        $livestocks = array_merge(...$livestocks);

        foreach ($livestocks as $livestock) {
            $product = $livestock->makeProduct();

            if (!$product) continue;

            $this->products[$product->getType()][] = $product;
        }

        return $this;
    }
}
