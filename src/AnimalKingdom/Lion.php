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
    public function move(): string
    {
        return "Purrr... I'm a kitty kat...";
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

    public function expire()
    {
        parent::expire();
        return "a bang was heard...";
    }
}
