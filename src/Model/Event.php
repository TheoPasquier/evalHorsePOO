<?php
namespace App\Model;

use App\Model\Equine;
use Exception;

class Event
{
    //properties
    public const JUMP = 'jump';
    public const TAME = 'tame';
    public const CROSS = 'cross';
    protected const PONEYGAMES = 'poneygames';

    protected int $maxCommitments;
    protected int $maxWater;
    protected string $event;

    public function __construct(string $event, int $maxCommitments = 5, int $maxWater)
    {
        $this->setEvent($event)
            ->setMaxCommitments($maxCommitments)
            ->setMaxWater($maxWater);
    }

    /***
     * Array of objects 'Equine' asked in arguments.
     */
    public function subscribeHorse(array $equinesList)
    {
        $idArray = array();
        foreach ($equinesList as $equine) {

            array_push($idArray, $equine->getId());
        }
        
        foreach ($idArray as $id) {
            $sameValues = array_count_values($idArray);

            //Search if $equinesList has an Id
            if($sameValues[$id] >= 2){
                throw new Exception('A horse has been chosen more than once for the same activity.');
            }
        }
    }

    /**
     * Get the value of maxCommitments
     * @return int
     */ 
    public function getMaxCommitments(): int
    {
        return $this->maxCommitments;
    }

    /**
     * Set the value of maxCommitments
     *
     * @return  self
     */ 
    private function setMaxCommitments($maxCommitments): self
    {
        $this->maxCommitments = $maxCommitments;

        return $this;
    }

    /**
     * Get the value of maxWater
     * @return int
     */ 
    public function getMaxWater(): int
    {
        return $this->maxWater;
    }

    /**
     * Set the value of maxWater
     *
     * @return  self
     */ 
    private function setMaxWater($maxWater): self
    {
        $this->maxWater = $maxWater;

        return $this;
    }

    /**
     * Get the value of event
     * @return string
     */ 
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Set the value of event
     *
     * @return  self
     */ 
    private function setEvent($event): self
    {
        $this->event = $event;

        return $this;
    }
}