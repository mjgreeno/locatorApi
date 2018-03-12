<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterApiTest extends TestCase
{
    /**
     * Test to create a basic user
     *
     * @return void
     */
    public function testAuthentication()
    {
        $this->post('/api/register', ['name' => 'Testing Tester', 'email' => 'testing@test.com', 'password' => 'p4ssw0rd!', 'c_password' => 'p4ssw0rd!'])
            ->assertJson([
                'message' => 'User register successfully.',
            ]);
    }
}
