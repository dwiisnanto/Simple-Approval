<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ApprovalStageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function approval_stage_test()
    {
        for ($i=1;$i<4;$i++) {
            $response = $this->postJson('/api/approval-stages', [
                'approver_id' => $i,
                'stage' => $i
            ]);
        }
        
        $response->assertStatus(200);
        for ($i=1;$i<4;$i++) {
            $this->assertDatabaseHas('approvalStages', [
                'approver_id' => $i,
                'stage' => $i
            ]);
        }
    }
}
