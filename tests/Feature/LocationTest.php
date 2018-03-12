<?php

namespace Tests\Feature;

use App\Location;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationTest extends TestCase
{
    /**
     * A test to make sure the location seeder worked. there were 30 entries so the test is basic enough
     *
     * @return void
     */
    public function testLocationSeeder()
    {
        $this->assertEquals(30, Location::count());
    }

}
