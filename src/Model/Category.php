<?php
namespace App\Model;
use Exception;

class Category
{
    protected const CATEGORYMAP = array('Sheitland', 'Poney', 'Horse');

    /**
     * Set a category by an index and return string value. 
     * @return string
     */
    public function setCategory($category): string
    {
        $categories = sizeof(self::CATEGORYMAP);
        if(self::CATEGORYMAP[$category] >= $categories)
        {
            throw new Exception('No category defined : ['.$categories.'] possibilities to select .');
            $categorySet = 'Undefined';
        } else{
            $categorySet = self::CATEGORYMAP[$category];
        }

        return $categorySet;
    }
}