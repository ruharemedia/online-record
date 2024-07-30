<?php

use App\Models\RecordCells;
use App\Models\RecordEssence;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $essence = RecordEssence::where('valid_from', '>=', now())
        ->where('valid_to', '>=', now())
        ->where('name', 'ilike', '%Alex Pushkin%')
        ->get();

    return $essence;

    if (!is_null($essence->valid_to)) {
        return 'Hello';
    }

    $dates = CarbonPeriod::create(now(), now()->addDays($essence->record_date_range));

    $formattedDates = array();

    foreach ($dates as $date) {
        $formattedDates[] = $date->format('d-m-Y');;
    }

    $recordCells = array();

    foreach ($formattedDates as $date) {
        $recordCells[] = [$date => $essence->essenceCells()->get()];
    }

    return $recordCells;


    return $essence;
    return RecordEssence::with('essenceCells')->get();
    return RecordCells::all();

    return $result2;
});
