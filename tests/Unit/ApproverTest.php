<?php

namespace Tests\Unit;

use App\Models\Approver;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApproverTest extends TestCase
{
    // use RefreshDatabase;

    public function approver_test()
    {
        $names = ['Ana', 'Ani', 'Ina'];
        foreach ($names as $value) {
            $response = $this->postJson('/api/approvers', [
                'name' => $value
            ]);
        }
        
        $response->assertStatus(200);
        foreach ($names as $value) {
            $this->assertDatabaseHas('approvers', [
                'name' => $value
            ]);
        }
    }
}
