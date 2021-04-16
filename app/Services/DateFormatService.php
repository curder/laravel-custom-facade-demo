<?php
namespace App\Services;

use Carbon\Carbon;

/**
 * Class DateFormatService
 *
 * @package App\Services
 */
class DateFormatService
{
    /**
     * @param string|Carbon $date
     *
     * @return string
     */
    public function dateFormatYMD($date) : string
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * @param string|Carbon $date
     *
     * @return string
     */
    public function dateFormatMDY($date) : string
    {
        return Carbon::parse($date)->format('m/d/Y');
    }
}
