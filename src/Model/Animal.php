<?php
namespace App\Model;
use App\Model\Able;

abstract class Animal implements Able
{
    //Properties
    protected const ROLE = [ null ,"runner","watcher"];
    protected string $name;
    protected string $role;

    //Constructor
    public function __construct(string $name, string $role = self::ROLE[0])
    {
        $this->setName($name)
            ->setRole($role);
    }

    public function __toString()
    {
        return "Is an entity with capabilities";
    }

    public function getCapabilities(): string
    {
        return "Animal is a capable entity.";
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
     * @return  self
     */ 
    private function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of role
     * 
     * @return string
     */ 
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    private function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }
}