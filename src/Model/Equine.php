<?php
namespace App\Model;

use App\Model\Category;
use Exception;

class Equine extends Animal
{
    //Properties
    //looking for an associative array including the color name and his hex code.
    protected const COLORMAP = array(
        "Alzan",
        "Bai",
        "Pie",
        "Grey",
        "White");

    protected Category $category;

    protected string $id;
    
    //$color is an integer value to set but getter return string 
    protected string $color;

    protected int $water;
    protected Rider $rider;
    private static int $species = 0 ;

    public function __construct(string $name, string $color, int $water, Rider $rider)
    {
        parent::__construct($name, $role = parent::ROLE[1]);
        $this->setColor($color)
            ->setWater($water)
            ->setRider($rider);
            // $this->id = new IdSetter;
            $this->setId();
            self::$species++;
    }


    public function __toString()
    {
        //  Category: {$this->getCategory()}

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

        $a = '0000';
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
        $colorPossibilities = sizeof(self::COLORMAP);
        if(self::COLORMAP[$color] >= $colorPossibilities)
        {
            throw new Exception('No color defined : ['.$colorPossibilities.'] colors possibilities to select .');
            $colorSet = 'Undefined';
        } else{
            $colorSet = self::COLORMAP[$color];
        }

        $this->color = $colorSet;

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

    /**
     * Get the value of rider
     * @return Rider
     */ 
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * Set the value of rider
     *
     * @return  self
     */ 
    public function setRider($rider)
    {
        $this->rider = $rider;

        return $this;
    }

    /**
     * Get the value of category
     * 
     * @return Category
     */ 
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category): self
    {
        //test
        $a = new Category();
        $a->setCategory($category);
        $this->category = $category;

        return $this;
    }
}