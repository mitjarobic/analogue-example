<?php

use App\Identity;
use App\Role;
use App\User;

class AnalogueTest extends TestCase {

    /**
     * @test
     */
    public function it_creates_a_user()
    {

        \DB::table('users')->insert(
            array('identity_first_name' => 'First Name', 'identity_last_name' => 'Last Name')
        );

        $userMapper = \Analogue::mapper(User::class);
        $user = new User(new Identity('first name', 'last_name'));
        $userMapper->store($user);

        $users = $userMapper->get();

        $userMapper->store($users[1]);
        $userMapper->store($users[0]);

    }

    /**
     * @teest
     */
    public function it_updates_a_user()
    {
        $userMapper = \Analogue::mapper(User::class);
        $user = $userMapper->find(1);
        $userMapper->store($user);
    }


//    /**
//     * @test
//     */
//    public function it_creates_a_role()
//    {
//        $roleMapper = \Analogue::mapper(Role::class);
//        $adminRole = new Role('admin');
//        $userRole = new Role('user');
//        $roleMapper->store( [$adminRole, $userRole] );
//    }
//
//    /**
//     * @test
//     */
//    public function it_updates_a_role()
//    {
//        $roleMapper = \Analogue::mapper(Role::class);
//        $role = $roleMapper->find(1);
//        $role->name = 'admin_updated';
//        $roleMapper->store($role);
//    }

}
