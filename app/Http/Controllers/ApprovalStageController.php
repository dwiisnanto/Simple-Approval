<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalStage;

class ApprovalStageController extends Controller
{
    public function createApproval(Request $request)
    {
        $request->validate([
            'approver_id' => 'exists:approvers,id',
            'stage' => 'unique:approval_stages,stage',
        ]);

        $create = ApprovalStage::create([
            'approver_id' => $request['approver_id'],
            'stage'       => $request['stage']
        ]);
        if ($create) {
            return "Success";
        }
    }
}
