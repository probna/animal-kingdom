<?php

namespace AnimalKingdom;

/**
 * Class Bird
 *
 * @package AnimalKingdom
 */

class Bird extends Animal implements Flying {

    /**
     * @var int $wingNumber Number of wings the bird has
     */
    protected $wingNumber = 2;

    /**
     * @var int $wingFlapCount Number of times the bird moved it's wings while flying
     */
    protected $wingFlapCount;

    /**
     * Allows bird to fly
     *
     * @return string
     */
    public function fly(): string
    {
        return "I believe I can fly...";
    }

    public function move(): string
    {
        return "I can walk as well.";
    }

    public function expire()
    {
        parent::expire();
        return "Navigation systems failed. I've flown into a mountain.";
    }
}
