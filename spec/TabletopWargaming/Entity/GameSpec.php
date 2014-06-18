<?php

namespace spec\TabletopWargaming\Entity;

use \Doctrine\Common\Collections\ArrayCollection;
use \TabletopWargaming\Entity\Faction;
use \PhpSpec\ObjectBehavior;
use \Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TabletopWargaming\Entity\Game');
    }

    function it_should_have_a_name()
    {
      $gameName = 'Warhammer 40,000';
      $this->setName($gameName);
      $this->getName()->shouldReturn($gameName);
    }

    function it_should_have_factions(Faction $faction)
    {
      $this->addFaction($faction);
      $collection = new ArrayCollection();
      $collection->add($faction);
      $this->getFactions()->shouldBeLike($collection);
    }

    public function getMatchers()
    {
      
    }
}
