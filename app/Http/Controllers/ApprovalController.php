<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Approval;

class ApprovalController extends Controller
{   
    public function createApproval(Request $request)
    {
        $create = Approval::create([
            'statues' => $request['statues'],
            'approvers' => $request['approvers'],
            'approval_stages' => $request['approval_stages'],
            'expenses' => $request['expenses'],
            'approvals' => $request['approvals']
        ]);
        if ($create) {
            return "Success";
        }
    }
}
