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
     * Allows bird to keep track of distance flown
     *
     * @param int $distance
     */
    public function fly(int $distance)
    {
        $flapCount = $this->calculateWingFlapCountFor($distance);

        $this->flapWings($flapCount);
        $this->move($distance);
    }

    /**
     * Perform wing flapping
     *
     * For now, just increment the flap counter and increment distance. We still don't know exact physics behind how
     * birds fly.
     *
     * @param int $flapCount
     */
    private function flapWings(int $flapCount)
    {
        $this->wingFlapCount += $flapCount;
    }

    /**
     * Bird can also move prototypically
     *
     * It can just keep track of the distance covered, without regard to how the actual movement was performed
     *
     * @param int $distance
     */
    public function move(int $distance)
    {
        $this->distanceTraveled += $distance;
    }


    /**
     * Returns the amount of distance the animal has traveled
     *
     * @return int
     */
    public function getDistanceTraveled(): int
    {
        return $this->distanceTraveled;
    }


    /**
     * Bird walks by simply covering some distance
     *
     * @param int $distance
     */
    public function walk(int $distance)
    {
        $this->move($distance);
    }

    /**
     * Return the number of times bird's wings were flapped
     *
     * @return int
     */
    public function getWingFlapCount(): int
    {
        return $this->wingFlapCount;
    }

    public function calculateWingFlapCountFor(int $distance)
    {
        return $distance * 5;
    }
}
