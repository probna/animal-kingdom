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
    public function it_should_be_able_to_move_by_walking_AND_flying()
    {
        $this->fly()->shouldReturn("I believe I can fly...");
        $this->move()->shouldReturn("I can walk as well.");
    }

    public function it_should_be_able_to_expire_when_smashed_into_a_side_of_a_mountain()
    {
        $this->expire()->shouldReturn("Navigation systems failed. I've flown into a mountain.");
    }
}
