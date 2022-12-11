<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountControllerTest extends TestCase
{

    /**         
     * @test
     */
    public function expect_a_redirect_index_when_user_not_logged_in()
    {
        $response = $this->get('/account');

        $response->assertStatus(403);
    }

    /**         
     * @test
     */
    public function expect_user_can_access_his_own_account_when_logged_in()
    {
        $response = $this->get('/account');

        $response->assertStatus(200);
    }
}
