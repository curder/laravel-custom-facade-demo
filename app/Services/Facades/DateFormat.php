<?php

namespace App\Services\Facades;

use App\Services\DateFormatService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string mdy(string|mixed $date)
 * @method static string ymd(string|mixed $date)
 *
 * @see DateFormatService
 */
class DateFormat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DateFormatService::class;
    }
}
