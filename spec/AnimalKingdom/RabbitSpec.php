<?php

namespace spec\AnimalKingdom;

use AnimalKingdom\Animal;
use AnimalKingdom\Rabbit;
use PhpSpec\ObjectBehavior;

/**
 * Class RabbitSpec
 *
 * @package spec\AnimalKingdom
 */
class RabbitSpec extends ObjectBehavior {
    /**
     * Constructs a rabbit with full health
     */
    public function let()
    {
        $this->beConstructedWith(100);
    }

    /**
     * Check if class can be initialized and extended from Animal base class
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(Rabbit::class);
        $this->shouldHaveType(Animal::class);
    }

    /**
     * Check if rabbit is healthy
     */
    public function it_is_healthy()
    {
        $this->getHealth()->shouldReturn(100);
    }


    /**
     * Rabbit should be able to run
     */
    public function it_should_be_able_to_move_by_running_rabbit_style()
    {
        $this->move()->shouldReturn("moving like a crazy hare!");
    }

    /**
     * Rabbit should expire under unfavorable conditions
     */
    public function it_should_be_able_to_expire_with_a_dying_breath()
    {
        $this->expire()->shouldReturn("Oh, the horror...");
        $this->getHealth()->shouldReturn(0);
    }
}
