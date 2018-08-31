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

    public function testTransaction()
    {
        $response = $this->get('trans');

        $response->assertSuccessful();
    }

    public function testTransactionMC()
    {
        $response = $this->get('transmc');

        $response->assertSuccessful();
    }

    public function testTransactionPost()
    {
        $response = $this->post('trasaction');

        $response->assertStatus(302);

        $response = $this->post('trasactionMultiCredit');

        $response->assertStatus(302);
    }
}