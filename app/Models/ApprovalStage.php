<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalStage extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $guarded = [''];
}
