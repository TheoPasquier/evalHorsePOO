<?php
namespace App\Model;


class Stable
{
    protected string $name;
    protected string $adress;
    protected string $street;
    protected string $postCode;
    protected string $city;
    protected Manager $manager;

    public function __construct( string $name, string $adress, string $street, string $postCode, string $city, Manager $manager)
    {
        $this->setName($name)
            ->setAdress($adress)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city);
            $this->manager = $manager;
        
    }


    /**
     * __toString()
     * Return the infmorations of the stable.
     */

    public function __toString()
    {
        
        return " \n
        ________________________________________\n
        Name of the stable : {$this->getName()}
        Adress : {$this->getAdress()}
        Street : {$this->getStreet()}
        Post Code : {$this->getPostCode()}
        City : {$this->getCity()}
        Manager : ↓ {$this->manager}
        ________________________________________\n
        ";    
        
    }

    /**
     * Get the value of name
     * 
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return self
     */ 
    private function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of adress
     * 
     * @return string
     */ 
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    private function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of street
     * 
     * @return string
     */ 
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    private function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     * 
     * @return string
     */ 
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */ 
    private function setPostCode($postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     * 
     * @return string
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    private function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }
}