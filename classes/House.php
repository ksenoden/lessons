<?php
class House
{

    private $a = "a";
    private $owner;
    private $roof;
    private $windows;
    private $doors;
    private $walls;
    private $fasade;

    public static $sum;

    public function build ($o,$r,$w,$d,$wl,$f){
        $this->owner = $o;
        $this->roof = $r;
        $this->windows = $w;
        $this->doors = $d;
        $this->walls = $wl;
        $this->fasade = $f;
        static::$sum++;
    }

    public function show (){
        echo "Дом ".$this->owner."<br>";
        echo "Крыша сделана из ".$this->roof."<br>";
        echo "В доме ".$this->windows." окон<br>";
        echo "Дверь ".$this->doors."<br>";
        echo "Стены сделаны из ".$this->walls."<br>";
        echo "Цвет дома ".$this->fasade."<br>";
        echo $this->a;
    }
}