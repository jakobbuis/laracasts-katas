<?php

namespace App;

abstract class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    private function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn)
    {
        if ($name === 'normal') {
            return new NormalItem($name, $quality, $sellIn);
        } else if ($name === 'Sulfuras, Hand of Ragnaros') {
            return new Sulfuras($name, $quality, $sellIn);
        } else if ($name === 'Aged Brie') {
            return new AgedBrie($name, $quality, $sellIn);
        } else if ($name === 'Backstage passes to a TAFKAL80ETC concert') {
            return new BackstagePass($name, $quality, $sellIn);
        } else if ($name === 'Conjured Mana Cake') {
            return new ConjuredItem($name, $quality, $sellIn);
        }

        throw new \RuntimeException("Unknown item {$name}");
    }

    abstract public function tick();
}
