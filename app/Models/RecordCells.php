<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordCells extends Model
{
    public $fillable =[
        'started_at',
        'end_at'
    ];

    protected $casts = [
        'begin' => 'hh:mm'
    ];
}
