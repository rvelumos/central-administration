<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DocumentControllerTest extends TestCase
{
     /**         
     * @test
     */
    public function expect_user_can_visit_document_page_when_logged_in()
    {
        $response = $this->get('/account');

        $response->assertStatus(200);
    }

    /**         
     * @test
     */
    public function expect_document_info_in_database_when_uploaded()
    {
        //todo
    }
}
