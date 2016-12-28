<?php

namespace AnimalKingdom;

/**
 * Class Animal
 *
 * Base class for all animals
 *
 * @package AnimalKingdom
 */
class Animal
{

    /**
     * @var int $health Indicates animal's health level
     */
    protected $health;


    /**
     * Constructs animal with full health
     *
     * @param int $health Animal health
     */
    public function __construct(int $health)
    {
        $this->health = $health;
    }

    /**
     * Returns animal's health level
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Moves animal prototypically
     *
     * @return string Confirms that protoanimal moves prototypically
     */
    public function move(): string
    {
        return "I move prototypically!";
    }

    /**
     * Animal expires
     *
     * Sets animal's health level to zero. Not sure if object should self destruct or just set health to zero.
     */
    public function expire()
    {
        $this->health = 0;
    }
}
