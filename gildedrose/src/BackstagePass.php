<?php

namespace App;

class BackstagePass extends GildedRose
{
    public function tick()
    {
        $this->sellIn = $this->sellIn - 1;

        if ($this->sellIn < 0) {
            $this->quality = 0;
            return;
        }

        if ($this->sellIn < 5) {
            $this->quality += 3;
        } else if ($this->sellIn < 10) {
            $this->quality += 2;
        } else {
            $this->quality += 1;
        }

        $this->quality = min(50, $this->quality);
    }
}
