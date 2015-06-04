<?php namespace App;

use Analogue\ORM\ValueObject;

class Identity extends ValueObject {

    public function __construct($firstName, $lastName)
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
    }

}