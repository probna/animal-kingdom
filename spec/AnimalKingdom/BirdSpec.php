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
     * Bird needs to be able to walk and fly as well
     *
     */
    public function it_should_be_able_to_move_by_walking()
    {
        $this->walk(5);
        $this->getDistanceTraveled()->shouldReturn(5);
    }

    /**
     * Bird can fly
     */
    public function it_should_be_able_to_move_by_flying()
    {
        $this->fly(50);
        $this->getDistanceTraveled()->shouldReturn(50);
        $this->getWingFlapCount()->shouldReturn(250);
    }

    /**
     * Bird needs to expire if health reaches zero
     */
    public function it_should_be_able_to_expire_when_smashed_into_a_side_of_a_mountain()
    {
        $this->expire();
        $this->IsAlive()->shouldBe(false);
    }
}
