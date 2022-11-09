<?php

namespace App\Model;

use FFI\Exception;
use App\Model\Equine;

// ['Saut', 'Dressage', 'Cross', 'PoneyGames']
class Capabilities
{
    //Properties
    protected bool $ableTo = false;
    public string $category;


    /**
     * isCapable() return a string of various action that an animal can do.
     * @return string
     */
    public function isCapable(string $category): string 
    {
        switch ($category) {
            case 'Sheitland':
                 $str = "
                    The animal :
                    {$this->Jumping(false)}
                    {$this->Taming(true)}
                    {$this->Crossing(false)}
                    {$this->PoneyGames(true)}
                 ";
                 return $str;
                break;

                case 'Poney':
                    $str = "
                       The animal :
                       {$this->Jumping(false)}
                       {$this->Taming(true)}
                       {$this->Crossing(true)}
                       {$this->PoneyGames(true)}
                    ";
                    return $str;
                   break;

                   case 'Horse':
                    $str = "
                       The animal :
                       {$this->Jumping(true)}
                       {$this->Taming(true)}
                       {$this->Crossing(true)}
                       {$this->PoneyGames(false)}
                    ";
                    return $str;
                   break;
            
            default:
                throw new Exception('No horse or existant object set to Capability.');
                break;
        }
        
    }



    public function Jumping($ableTo): ?string
    {
        if($ableTo){
            return "- Can jump.";
        }else{
            return null;
        }
    }

    public function Taming($ableTo): ?string
    {
        if($ableTo){
            return "- Can be Tamed.";
        }else{
            return null;
        }
    }

    public function Crossing($ableTo): ?string
    {
        if($ableTo){
            return "- Can do the Cross.";
        }else{
            return null;
        }
    }

    public function PoneyGames($ableTo): ?string
    {
        if($ableTo){
            return "- Can do the Poney Game.";
        }else{
            return null;
        }
    }
}
