<?php
namespace App\Model;


class Manager extends Human
{
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $adress, $street, $postCode, $city, $category);
    }

    /**
     * __toString()
     * Return the informations of the Manager.
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