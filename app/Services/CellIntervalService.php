<?php

namespace App\Services;

use Carbon\CarbonPeriod;

class CellIntervalService{

    /**
     * Method create time cells
     *
     * @param int $interval = 30     - interval of time;
     * @param string $startTime - start interval time;
     * @param string $endTime   - end interval time;
     *
     * @return array
     */
    public static function createCells(int $interval, string $startTime, string $endTime) :mixed
    {
        $fullDates = CarbonPeriod::create($startTime, "$interval minutes", $endTime);

        $hoursAndMinutes = [];

        foreach ($fullDates as $cell){
            $hoursAndMinutes[] = $cell->format('H:i');
        }

        $cells = array();

        foreach ($hoursAndMinutes as $index => $value) {

            if(isset($hoursAndMinutes[$index+1])){
                $cells[] = [
                    $value,
                    $hoursAndMinutes[$index+1]
                ];
            }
        }

        return $cells;
    }
}
