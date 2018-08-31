<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SoapTest extends TestCase
{
    public function testBanks()
    {
        $response = $this->get('bank');

        $response->assertStatus(200);
    }
}