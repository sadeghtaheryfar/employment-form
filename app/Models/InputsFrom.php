<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InputsFrom extends Model
{
    protected $table = 'inputs_froms';
    use HasFactory,SoftDeletes;
    
    protected $guarded = ['id'];
}
