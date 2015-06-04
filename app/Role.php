<?php namespace App;

use Analogue\ORM\Entity;

class Role extends Entity
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}