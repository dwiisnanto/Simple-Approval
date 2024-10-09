<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ApprovalStage;
use App\Models\Approval;
use App\Models\Approver;

class ExpenseController extends Controller
{
    public function createExpense(Request $request)
    {
        $request->validate([
            'amount' => 'integer|gt:1'
        ]);

        $create = Expense::create([
            'amount' => $request['amount'],
            'stage' => $request['stage']
        ]);
        if (!$create) {
            return "Fail";
        }
        $approver = Approver::find($request->approver_id);
        $createApproval = Approval::create([
            'statues' => 'pending',
            'approvers' => $approver['name'],
            'approval_stages' => $request['stage'],
            'expenses' => $request['amount']
        ]);

        if (!$createApproval) {
            return "Failed";
        }
    }

    public function approveExpense(Request $request, $id)
    {
        $approval = Approval::findOrFail($id);
        
        if ($approval['approver_id'] == $request->approver_id){
            $approval->statues = 'approved';
            $approval->save();
        }

        return response()->json(['message' => 'All approvals completed.'], 200);
    }

    public function getExpense($id)
    {
        $approval = Approval::findOrFail($id);

        return response()->json(['message' => 'All approvals completed.'], 200);
    }
}
