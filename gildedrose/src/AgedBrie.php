<?php

namespace App;

class AgedBrie extends GildedRose
{
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            $this->quality += 2;
        } else {
            $this->quality += 1;
        }

        $this->quality = min(50, $this->quality);
    }
}
