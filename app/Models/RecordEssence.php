<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecordEssence extends Model
{
    use SoftDeletes;
    public $fillable = [
        'name',
        'valid_from',
        'valid_to',
        'record_date_range'
    ];

    public function essenceCells(): BelongsToMany
    {
        return $this->belongsToMany(RecordCells::class);
    }
}
