<?php
namespace baelle\fussball;
include_once 'ball.php';
class fussball extends \baelle\ball implements \baelle\intf\BallInterface
{
    private $farbe  ;

    public function __construct(
        $name,
        $durchmesser,
        $material,
        $farbe
    ) {
        parent::__construct($name, $durchmesser,$material);
        $this->farbe = $farbe;
    }

    public function getVolume(): float
    {
        return ((4/3)*pi()*pow(($this->getDurchmesser())/2,3));

    }
    public function __toString(): string
    {
        return $this->getName().' aus '.$this->getMaterial().' mit der Farbe und einem Volumen von '.$this->getVolume();
    }
}
