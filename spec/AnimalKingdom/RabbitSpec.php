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
    public function it_should_be_able_to_move_across_a_certain_distance()
    {
        $this->move(6);
        $this->getDistanceTraveled()->shouldReturn(6);
    }

    /**
     * Rabbit should expire under unfavorable conditions
     */
    public function it_should_be_able_to_expire()
    {
        $this->expire();
        $this->getHealth()->shouldReturn(0);
    }

    /**
     * Rabbit's health should decrease by 1 point on each run
     */
    public function it_should_have_its_health_decreased_by_1_point_with_each_run()
    {
        $this->move(1000);
        $this->getHealth()->shouldBe(99);
    }

    /**
     * If rabbit runs for too long without proper rejuvenation, his health will deteriorate greatly and he will expire.
     */
    public function it_should_expire_when_running_for_too_long()
    {
        for($i=1; $i<=120; $i++){
            $this->move(10);
        }

        $this->getHealth()->shouldReturn(0);
    }
}
