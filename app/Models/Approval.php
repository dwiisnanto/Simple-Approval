<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $guarded = [''];
}
