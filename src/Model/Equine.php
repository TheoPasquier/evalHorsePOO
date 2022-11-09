<?php
namespace App\Model;

class Equine extends Animal
{
    //Properties
    protected string $id;
    protected string $color;
    protected int $water;
    protected Rider $rider;
    private static int $species = 0 ;

    public function __construct(string $name, string $color, int $water, Rider $rider)
    {
        parent::__construct($name, $role = parent::ROLE[1]);
        $this->setColor($color)
            ->setWater($water);
            $this->rider = $rider;
            // $this->id = new IdSetter;
            $this->setId();
            self::$species++;
    }


    public function __toString()
    {
        return " \n
            _______________________________________
            Name : {$this->getName()}
            Role : {$this->getRole()}
            Id : {$this->getId()}
            Color : {$this->getColor()}
            Water needed : {$this->getWater()}
            Rider : ↓{$this->rider}
            ________________________________________
        ";
    }

    /**
     * Get the value of id
     * 
     * @return string
     */ 
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    private function setId(): self
    {
        //pattern 000-n-C-N

        $a = 0000;
        $b = substr ($this-> getName(),0 , 1);
        $c = substr ($this-> getColor(),0, 1);
        $d = self::$species;

        $this->id = $a.'-'.$b.'-'.$c.'-'.$d ;

        return $this;
    }

    /**
     * Get the value of color
     * 
     * @return string
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    private function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of water
     * 
     * @return int
     */ 
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */ 
    private function setWater($water): self
    {
        $this->water = $water;

        return $this;
    }
}