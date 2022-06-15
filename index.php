<?php
class Laptop
{
    private $ram;
    private $cpu;
    private $screen;
    private $gpu;
    private $keyboard;
    private $touchpad;
    private $ssd;
    private $networkcard;

    public function __construct($ram, $cpu, $screen, $gpu, $keyboard, $touchpad, $ssd, $networkcard)
    {
        $this->arr = array('ram', 'cpu', 'screen', 'gpu', 'keyboard', 'touchpad', 'ssd', 'networkcard');
        foreach ($this->arr as &$value) {
            $this->$value = $$value;
        }
    }
    public function laptopComponents()
    {
        foreach ($this->arr as &$value) {
            echo $this->$value;
        }
    }
}

class Muis extends Laptop
{
    private $sensor;
    private $kabel;
    private $x;
    private $y;

    public function setPosition($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition()
    {
        return $this->x . ', ' . $this->y;
    }
}

$obj = new Laptop('ram' . "<br>", 'cpu' . "<br>", 'TABLEPREFIX' . "<br>", 'gpu' . "<br>", 'keyboard' . "<br>", 'touchpad' . "<br>", 'ssd' . "<br>", 'networkcard');
$obj->laptopComponents();
$objMuis = new Muis('ram' . "<br>", 'cpu' . "<br>", 'TABLEPREFIX' . "<br>", 'gpu' . "<br>", 'keyboard' . "<br>", 'touchpad' . "<br>", 'ssd' . "<br>", 'networkcard');
$objMuis->setPosition(3, 9);
echo $objMuis->getPosition();
