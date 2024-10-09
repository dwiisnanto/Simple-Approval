<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExpenseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function expense_test()
    {
        $names = ['1000', '2000', '3000', '4000'];
        foreach ($names as $key => $value) {
            $response = $this->postJson('/api/expense', [
                'amount' => $value,
                'stage' => $key
            ]);
        }
        
        $response->assertStatus(200);
        foreach ($names as $key =>$value) {
            $this->assertDatabaseHas('expenses', [
                'amount' => $value,
                'stage' => $key
            ]);
        }

        // Expense 1
        $response = $this->postJson('/api/expense/1/approve');
        $response->assertStatus(200);

        // Expense 2
        $response = $this->postJson('/api/expense/2/approve');
        $response->assertStatus(200);

        // Expense 3
        $response = $this->postJson('/api/expense/3/approve');
        $response->assertStatus(200);

        // Expense 4
        $response = $this->postJson('/api/expense/4/approve');
        $response->assertStatus(200);
    }
}
