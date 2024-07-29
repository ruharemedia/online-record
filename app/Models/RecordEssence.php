<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecordEssence extends Model
{
    use SoftDeletes;
    public $fillable = [
        'name',
        'valid_from',
        'valid_to'
    ];
}
