<?php


namespace AnimalKingdom;


/**
 * Interface Flying
 *
 * Defines basic functionality necessary for flying animals
 *
 * @package AnimalKingdom
 */
interface Flying {
    /**
     * Allows the animal to fly
     *
     * Animal can fly over certain distance
     *
     * @param int $distance
     */
    public function fly(int $distance);
}