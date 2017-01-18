<?php

namespace spec\AnimalKingdom;

use AnimalKingdom\Animal;
use AnimalKingdom\Bird;
use PhpSpec\ObjectBehavior;

/**
 * Class BirdSpec
 *
 * @package spec\AnimalKingdom
 */
class BirdSpec extends ObjectBehavior {
    public function let()
    {
        $this->beConstructedWith(100);
    }

    /**
     * Check if class can be initialized and extended from Animal base class
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(Bird::class);
        $this->shouldHaveType(Animal::class);
    }

    public function it_should_implement_flying_interface()
    {
        $this->shouldImplement("AnimalKingdom\\Flying");
    }

    /**
     * Bird needs to be able to keep track of distance covered by walking
     *
     */
    public function it_should_be_able_to_know_how_much_distance_was_covered_by_walking()
    {
        $this->walk(5);
        $this->getDistanceTraveled()->shouldReturn(5);
    }

    public function it_should_be_able_to_expire_when_smashed_into_a_side_of_a_mountain()
    {
        $this->expire()->shouldReturn("Navigation systems failed. I've flown into a mountain.");


    /**
     * Bird needs to expire if health reaches zero
     */
    public function it_should_be_able_to_expire()
    {
        $this->expire();
        $this->isAlive()->shouldBe(false);
    }
}
