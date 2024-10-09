<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
*    @OA\Get(
*       path="/approvers",
*       tags={"Approver"},
*       operationId="addApprover",
*       summary="Add Approver",
*       description="Add Approver",
*       @OA\Response(
*           response="200",
*           description="Ok",
*           @OA\JsonContent
*           (example={
*               "success": true,
*               "message": "Berhasil menambah approver",
*               "data": {
*                   {
*                   "id": "1",
*                   "name": "Ani",
*                  }
*              }
*          }),
*      ),
*  )
*/

class DocumentationController extends Controller
{
    public function listDocumentation() {
        return 'true';
    }

}
