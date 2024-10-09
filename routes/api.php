<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DocumentationController;
use App\Http\Controllers\ApproverController;
use App\Http\Controllers\ApprovalStageController;
use App\Http\Controllers\ExpenseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1'], function () {
    Route::get('api-docs', [DocumentationController::class, 'listDocumentation']);
});
Route::post('approvers', [ApproverController::class, 'createApprover']);
Route::post('approval-stage', [ApprovalStageController::class, 'createApproval']);
Route::put('approval-stage/{id}', [ApprovalStageController::class, 'updateApproval']);
Route::post('expense', [ExpenseController::class, 'createExpense']);
Route::patch('expense/{id}/approve', [ExpenseController::class, 'approveExpense']);
Route::get('expense/{id}', [ExpenseController::class, 'getExpense']);
