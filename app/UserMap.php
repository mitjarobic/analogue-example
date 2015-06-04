<?php namespace App;

use Analogue\ORM\EntityMap;

class UserMap extends EntityMap {

    protected $table = 'users';

    protected $embeddables = ['identity' => Identity::class];

}