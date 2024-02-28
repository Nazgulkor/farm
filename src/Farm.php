<?php

namespace App\Farm;

class Farm
{
    private Barn $barn;

    public function __construct()
    {
        $this->barn = new Barn;
    }

    public function getBarn(): Barn
    {
        return $this->barn;
    }

    public function countAllLivestockUniques(): void
    {
        $livestockts = $this->getBarn()->getLivestocks();

        $this->countUniques($livestockts);
    }

    public function countAllProducUniques(): void
    {
        $products = $this->getBarn()->getProducts();
        $result = [];

        foreach ($products as $products) {
            foreach ($products as $product) {
                $key = $product->getType() . '(' . $product->getUnit() . ')';

                if (!isset($result[$key])) $result[$key] = 0;

                $result[$key] += $product->getValue();
            }
        }

        foreach ($result as $type => $count) {
            echo "$type = $count\n";
        }
    }

    protected function countUniques(array $store): void
    {
        $counts = [];

        foreach ($store as $type => $objs) {
            $counts[$type] = count($objs);
        }

        foreach ($counts as $type => $count) {
            echo "$type = $count\n";
        }
    }
}
