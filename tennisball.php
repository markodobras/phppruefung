<?php
namespace baelle\tennisball;
include_once 'ball.php';

class tennisball extends \baelle\ball implements \baelle\intf\BallInterface
{
    private $masse;

    public function __construct(
        $name,
        $durchmesser,
        $material,
        $masse
    ) {
        parent::__construct($name, $durchmesser,$material);
        $this->masse = $masse;
    }

    public function getVolume(): float
    {
        return (4/3)*pi()*pow(($this->getDurchmesser())/2,3);
    }
    public function __toString(): string
    {
        return $this->getName().' aus '.$this->getMaterial().' mit dem Druck und einem Volumen von '.$this->getVolume();
    }
}
