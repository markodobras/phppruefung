<?php

namespace baelle;
include_once 'ballinterface.php';
/**
 * Class Ball
 * Class is the base for all balls
 */
abstract class ball
{
    private $name;
    private $durchmesser;
    private $material;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDurchmesser(): float
    {
        return $this->durchmesser;
    }
    public function getMaterial(): string
    {
        return $this->material;
    }

    public function __construct(
        string $name,
        float $durchmesser,
        string $material
    ){
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Dieser ".$this->getName() . " aus " . $this->getMaterial();
    }
}
