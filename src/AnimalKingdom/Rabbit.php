<?php

namespace AnimalKingdom;

/**
 * Class Rabbit
 *
 * @package AnimalKingdom
 */
class Rabbit extends Animal
{

    /**
     * Make rabbit run
     *
     * He goes really, really fast. Fast fucker.
     * @return string
     */
    public function move(): string
    {
        return "moving like a crazy hare!";
    }

    /**
     * Rabbit expires
     * @return string
     */
    public function expire(): string
    {
        parent::expire();
        return "Oh, the horror...";
    }

}
