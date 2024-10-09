<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Approver;

class ApproverController extends Controller
{
    public function createApprover(Request $request)
    {
        $request->validate([
            'name' => 'unique:approvers,name'
        ]);
        
        $create = Approver::create(['name' => $request['name']]);
        if ($create) {
            return 'SUCCESS';
        }
    }
}
