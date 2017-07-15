<?php

class Block extends House
{
    private $podjezd;
    private $floor;

    public function build($o, $r, $w, $d, $wl, $f, $p, $fl)
    {
        parent::build($o, $r, $w, $d, $wl, $f);
        $this->podjezd = $p;
        $this->floor = $fl;
    }

    public function show()
    {
        parent::show();
        echo "Номер подьезда ".$this->podjezd."<br>";
        echo "Этаж номер ".$this->floor."<br>";
    }
}