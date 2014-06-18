<?php

namespace TabletopWargaming\Entity;

use \Doctrine\Common\Collections\ArrayCollection;
use \TabletopWargaming\Entity\Faction;

class Game
{
    protected $id;

    protected $name;

    protected $factions;

    public function __construct()
    {
        $this->factions = new ArrayCollection();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addFaction(Faction $faction)
    {
      $this->factions->add($faction);
    }

    public function getFactions()
    {
      return $this->factions;
    }

}
