<?php
namespace App\Model;


class Rider extends Human
{
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $adress, $street, $postCode, $city, $category);
    }
    
    // set Game type (return self) calculated with the type of equine is riding.
    

    /**
     * __toString()
     * Return the informations of the Rider.
     */
    public function __toString()
    {
        return " \n
            _______________________________________
            Name : {$this->getName()}
            Adress : {$this->getAdress()}
            Street : {$this->getStreet()}
            Post Code : {$this->getPostCode()}
            City : {$this->getCity()}
            Category : {$this->category}
            ________________________________________
        ";
    }
}