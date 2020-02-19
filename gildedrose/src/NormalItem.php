<?php

namespace App;

class NormalItem extends GildedRose
{
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn >= 0) {
            $this->quality -= 1;
        } else {
            $this->quality -= 2;
        }

        $this->quality = max(0, $this->quality);
    }
}
