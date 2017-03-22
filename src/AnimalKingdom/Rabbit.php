<?php

namespace AnimalKingdom;

/**
 * Class Rabbit
 *
 * Rabbits are fast animals that can cover great amounts of distance with extremely great speed. Such great movement
 * comes at a cost of reducing the rabbits health levels each time they move.
 *
 * @package AnimalKingdom
 */
class Rabbit extends Animal {

    /**
     * Make rabbit run across a certain distance
     *
     * He goes really, really fast.
     * As a side effect of such unbelievable speed, rabbit's health deteriorates, and he looses 1 health point
     * on each run.
     *
     * @param int $distance The distance the rabbit needs to run
     */
    public function move(int $distance)
    {
        if ($this->IsAlive()){
            $this->distanceTraveled += $distance;
            $this->depleteHealthBy(1);
        }
    }


    /**
     * Deplete health by a certain amount
     *
     * Rabbit's health gets depleted when he runs, or gets attacked. Should not be used directly when wanting to hurt
     * the rabbit.
     *
     * @param int $healthPoints
     */
    private function depleteHealthBy(int $healthPoints)
    {
        if ($this->health <= 1) {
            $this->expire();
            return;
        }

        $this->health -= $healthPoints;
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
}
