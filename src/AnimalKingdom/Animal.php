<?php

namespace AnimalKingdom;

/**
 * Abstract Class Animal
 *
 * Base class for all animals to extend.
 * Animal is instantiated with a clean bill of health, can move, knows how much distance it has traveled, and can
 * expire when it's health reaches zero.
 *
 * We're not sure how to handle the expiration of an animal - should the object self destruct when reaching zero health?
 *
 * @package AnimalKingdom
 */

abstract class Animal
{

    /**
     * @var int $health Indicates animal's health level
     */
    protected $health;

    /**
     * @var int $distanceTraveled Keeps track of the distance the animal traveled
     */
    protected $distanceTraveled;

    /**
     * Constructs animal with full health
     *
     * @param int $health Animal health
     */
    public function __construct(int $health){
        $this->health = $health;
    }

    /**
     * Returns animal's health level
     *
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Moves animal prototypically
     *
     * Animal just knows it needs to move a certain distance.
     *
     * @param int $distance The amount of distance animal needs to move
     */
    abstract public function move($distance);

    /**
     * Animal expires
     *
     * Sets animal's health level to zero. Not sure if object should self destruct or just set health to zero.
     */
    public function expire()
    {
        $this->health = 0;
    }

    /**
     * Returns the amount of distance the animal has traveled
     *
     * @return int
     */
    abstract public function getDistanceTraveled(): int;

    /**
     * Check if animal is alive
     *
     * @return bool
     */
    public function IsAlive()
    {
        return (bool)$this->health;
    }
}
