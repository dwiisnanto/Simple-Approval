<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approver extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $guarded = [''];
}
