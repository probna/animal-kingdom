<?php

namespace spec\AnimalKingdom;

use AnimalKingdom\Animal;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class AnimalSpec
 *
 * Defines basic behaviour of Animals
 * @package spec\AnimalKingdom
 */
class AnimalSpec extends ObjectBehavior
{
    /**
     * Check if class can be initialized
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType(Animal::class);
    }

    /**
     * Construct animal with full health
     */
    public function let()
    {
        $this->beConstructedWith(100);
    }

    /**
     * Check if animal is healthy
     */
    public function it_is_healthy()
    {
        $this->getHealth()->shouldReturn(100);
    }

    /**
     * Check if animal can move
     */
    public function it_should_be_able_to_move()
    {
        $this->move()->shouldReturn("I move prototypically!");
    }

    /**
     * Animals should expire upon great health reduction (poison, death, falling off a cliff...)
     *
     * Question still remains: how do we handle the death of an animal? Does the object self destruct? Do we just
     * keep it as is, with health/status altered?
     * Do we just allow animal to die without putting up a fight? (we would probably need additional methods to
     * handle dangerous situations, like flee() or fight())
     */
    public function it_should_be_able_to_expire()
    {
        $this->expire();
        $this->getHealth()->shouldReturn(0);
    }

}
