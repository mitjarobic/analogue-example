<?php namespace App;

use Analogue\ORM\Entity;

class User extends Entity {

    public function __construct(Identity $identity)
    {
        $this->identity = $identity;
    }

}
