<?php
namespace App\Model;

use App\Model\Equine;
use App\Model\Rider;
use App\Model\Able;

class Horse extends Equine implements Able
{

    public function __construct(string $name, string $color, int $water, Rider $rider)
    {
        parent::__construct($name, $color, $water, $rider);
        $this->setCategory(2) ; // 2 for "Horse";

    }

    public function __toString()
    {

        return " \n
            _______________________________________
            Name : {$this->getName()}
            Category: {$this->getCategory()}
            Role : {$this->getRole()}
            Id : {$this->getId()}
            Color : {$this->getColor()}
            Water needed : {$this->getWater()}
            Capabilities : ↓{$this->getCapabilities()}
            Rider : ↓{$this->rider}
            ________________________________________
        ";
    }

    public function getCapabilities(): string
    {
        $capabilitiesInstance = new Capabilities();
        return $capabilitiesInstance->isCapable($this->getCategory());

    }

}