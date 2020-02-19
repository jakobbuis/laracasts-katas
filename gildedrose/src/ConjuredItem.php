<?php

namespace App;

class ConjuredItem extends GildedRose
{
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            $this->quality -= 4;
        } else {
            $this->quality -= 2;
        }

        $this->quality = max(0, $this->quality);
    }
}
