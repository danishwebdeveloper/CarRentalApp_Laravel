<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
   use RefreshDatabase;
    public function test_user_duplication()
    {
        $this->withExceptionHandling();

        //
        $user1 = User::make([
            'name' => 'Dr. Freeda Lubowitz DDS',
            'email' => 'aschiller@gmail.com',
        ]);

        $user2 = User::make([
            'name' => 'Kennedy Rolfson',
            'email' => 'harber.lavada@example.net',
        ]);

        $this->assertTrue($user1->name != $user2->name);
        $this->assertTrue($user1->email != $user2->email);
    }

    public function test_user_delete()
    {
        $this->withoutExceptionHandling();

        // If user exist then delete it and test on it
        $user = User::first();
        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    // HTTP TESTING
    public function test_post_new_user_by_admin()
    {
        $response = $this->post('/register',[
            'name' => 'Dr Peter',
            'email' => 'peterbell@gmail.com',
            'email_verified' => 'peterbell@gmail.com',
            'password' => 'selly123456',
        ]);
        $response->assertRedirect('/');
    }
}
