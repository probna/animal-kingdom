<?php

namespace AnimalKingdom;

/**
 * Class Lion
 *
 * @package AnimalKingdom
 */
class Lion extends Animal
{


    /**
     * Lion moves graciously
     *
     * @return string
     */
    public function move(int $distance)
    {
        $this->distanceTraveled += $distance;
    }


    /**
     * @param \AnimalKingdom\Rabbit $rabbit
     *
     * @return string
     */
    public function feastOnRabbit(Rabbit $rabbit)
    {
        $rabbit->expire();
        return "I'm not full, but it's better than eating grass!";
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
