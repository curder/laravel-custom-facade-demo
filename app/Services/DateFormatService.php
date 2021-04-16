<?php
namespace App\Services;

use Carbon\Carbon;

class DateFormatService
{
    /**
     * @param string $date
     *
     * @return string
     */
    public function dateFormatYMD(string $date) : string
    {
        return Carbon::createFromFormat('m/d/Y', $date)
                     ->format('Y-m-d');
    }
    /**
     * @param string $date
     *
     * @return string
     */
    public function dateFormatMDY(string $date) : string
    {
        return Carbon::createFromFormat('Y-m-d', $date)
                     ->format('m/d/Y');
    }
}
