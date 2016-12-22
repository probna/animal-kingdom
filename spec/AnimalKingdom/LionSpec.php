<?php

namespace spec\AnimalKingdom;

use AnimalKingdom\Animal;
use AnimalKingdom\Lion;
use AnimalKingdom\Rabbit;
use PhpSpec\ObjectBehavior;

/**
 * Class LionSpec
 *
 * @package spec\AnimalKingdom
 */
class LionSpec extends ObjectBehavior {
    /**
     * Construct a lion with full health
     */
    public function let()
    {
        $this->beConstructedWith(100);
    }

    /**
     * Check if lion is healthy
     */
    public function it_is_healthy()
    {
        $this->getHealth()->shouldReturn(100);
    }

    /**
     * Check if class can be initialized and extended from Animal base class
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(Lion::class);
        $this->shouldHaveType(Animal::class);
    }

    /**
     * @param \AnimalKingdom\Rabbit|\PhpSpec\Wrapper\Collaborator $rabbit
     */
    public function it_should_be_able_to_feast_on_rabbits(Rabbit $rabbit)
    {
        $rabbit->expire()->willReturn("Oh, the horror...");
        $this->feastOnRabbit($rabbit)->shouldReturn("I'm not full, but it's better than eating grass!");
        $rabbit->expire()->shouldHaveBeenCalled();
    }

    /**
     * Lion should expire when shot from a gun. Or by some other means have it's health reduced to zero
     */
    public function it_should_be_able_to_expire_when_shot_from_a_gun()
    {
        $this->expire()->shouldReturn("a bang was heard...");
        $this->getHealth()->shouldReturn(0);
    }

    public function it_should_move_graciously()
    {
        $this->move()->shouldReturn("Purrr... I'm a kitty kat...");
    }
}
