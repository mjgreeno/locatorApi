<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * API specific tests to make sure things are functioning at a basic level
     * note:  you may have to put your own Bearer token in place of the current test to pass.
     *
     * @return void
     */
    public function testAllLocations()
    {
        $this->get('/api/location', ['Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM1NTkyMzhlZmU4MzZiMTcyZmE4YzQ3ZDMxNzRmMDQ0MmU4ZDM3OTJjMTExNjNjNDBmNTgwZWYxZmQ5MTM3ZjlmMDczNjE1YWMzYzNhYTgxIn0.eyJhdWQiOiIzIiwianRpIjoiYzU1OTIzOGVmZTgzNmIxNzJmYThjNDdkMzE3NGYwNDQyZThkMzc5MmMxMTE2M2M0MGY1ODBlZjFmZDkxMzdmOWYwNzM2MTVhYzNjM2FhODEiLCJpYXQiOjE1MjA4MjY4NDAsIm5iZiI6MTUyMDgyNjg0MCwiZXhwIjoxNTUyMzYyODQwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.CM_YKofRqcl26Bj9Qg99wqgc-V7NSTjdkKTGfVWPWBxqN2paJxRZAhTtub0IqinW2ImPMLbhozBpuEXwHQv1DPJYK6v4UJcbrcS3gsemEy4CuDoJ1myhMhckuA_YAlLYf9ekGM4KjQZJgPRYxG1tLfWXffYcnJOJvyuMRvkliv57M6PHTcViD6QWK96wUlTGtpe_7gLsPgkIXRhZBeBmNWFV9LsfO7bOy0a3yB491o1DiZvVzwJRD0HcpkBcLsRj455JJSW2WYJRXfpZ_AuC6eKfBGrU_AbrKedxO18AnEM695VUBVEVPF0I2gyCJosrFhjbXdhlI4q6Zw-ZIcxpb2NXbXBWfDXBRQ6wgDciW7Qb2gl1LXK5PwxTHEQDeAHn8177EKovHllCerZHW9ng3ymCEJ5q9SVT11Akp-Fjz1tIiaQzHOK5dZi5y3fkFyXi9qci7deIrygUWaUxcXocjV9fefD3beN-2PqMIO4-Ev1ocy_CBUoceAm-bBt1HUqp8AQmMZ2A58XCz1w_QjyUbItWrafxKOw6EGu3i0ztct44aiY70VzJjxrFH9bvRfkwpemXRtcL_Ij4EVaceg2JyUdNiuBkjVn3alyOxT-ga-0eXEUVS_7mj29F3XOTLKmNjpdv3zQZ8BsK8QFxuvO81jmd6DX-iq-sddADg-OxOpE', 'Accept' => 'application/json'])
            ->assertStatus(200);
    }

    public function testNearestLocations()
    {
        $this->get('/api/locationnearest', ['lat' => '38.9624217', 'lat' => '-94.764072', 'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM1NTkyMzhlZmU4MzZiMTcyZmE4YzQ3ZDMxNzRmMDQ0MmU4ZDM3OTJjMTExNjNjNDBmNTgwZWYxZmQ5MTM3ZjlmMDczNjE1YWMzYzNhYTgxIn0.eyJhdWQiOiIzIiwianRpIjoiYzU1OTIzOGVmZTgzNmIxNzJmYThjNDdkMzE3NGYwNDQyZThkMzc5MmMxMTE2M2M0MGY1ODBlZjFmZDkxMzdmOWYwNzM2MTVhYzNjM2FhODEiLCJpYXQiOjE1MjA4MjY4NDAsIm5iZiI6MTUyMDgyNjg0MCwiZXhwIjoxNTUyMzYyODQwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.CM_YKofRqcl26Bj9Qg99wqgc-V7NSTjdkKTGfVWPWBxqN2paJxRZAhTtub0IqinW2ImPMLbhozBpuEXwHQv1DPJYK6v4UJcbrcS3gsemEy4CuDoJ1myhMhckuA_YAlLYf9ekGM4KjQZJgPRYxG1tLfWXffYcnJOJvyuMRvkliv57M6PHTcViD6QWK96wUlTGtpe_7gLsPgkIXRhZBeBmNWFV9LsfO7bOy0a3yB491o1DiZvVzwJRD0HcpkBcLsRj455JJSW2WYJRXfpZ_AuC6eKfBGrU_AbrKedxO18AnEM695VUBVEVPF0I2gyCJosrFhjbXdhlI4q6Zw-ZIcxpb2NXbXBWfDXBRQ6wgDciW7Qb2gl1LXK5PwxTHEQDeAHn8177EKovHllCerZHW9ng3ymCEJ5q9SVT11Akp-Fjz1tIiaQzHOK5dZi5y3fkFyXi9qci7deIrygUWaUxcXocjV9fefD3beN-2PqMIO4-Ev1ocy_CBUoceAm-bBt1HUqp8AQmMZ2A58XCz1w_QjyUbItWrafxKOw6EGu3i0ztct44aiY70VzJjxrFH9bvRfkwpemXRtcL_Ij4EVaceg2JyUdNiuBkjVn3alyOxT-ga-0eXEUVS_7mj29F3XOTLKmNjpdv3zQZ8BsK8QFxuvO81jmd6DX-iq-sddADg-OxOpE', 'Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
