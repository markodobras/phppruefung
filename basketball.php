<?php

namespace baelle\basketball;
include_once 'ball.php';
class basketball extends \baelle\ball implements \baelle\intf\BallInterface
{
    private $liga;

    public function __construct(
        $name,
        $durchmesser,
        $material,
        $liga
    ) {
        parent::__construct($name, $durchmesser,$material);
        $this->liga = $liga;
    }

    public function getVolume(): float
    {
        return (4/3)*pi()*pow(($this->getDurchmesser())/2,3);
    }
    public function __toString(): string
    {
        return $this->getName().' aus '.$this->getMaterial().' aus der '.' Liga und einem Volumen von '.$this->getVolume();
    }
}
