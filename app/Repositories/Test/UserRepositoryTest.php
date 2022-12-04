<?php

namespace App\Repositories\Test;

use App\Repositories\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_get_user_by_user_id()
    {
        setup:
        $this->refreshDatabase();
        $this->seed();

        $repository = new UserRepository();
        
        when:
        $actual = $repository->getUserById('000001');

        then:
        $this->assertEquals('000001', $actual->user_id);
    }
}
