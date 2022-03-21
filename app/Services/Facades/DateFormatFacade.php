<?php

namespace App\Services\Facades;

use App\Services\DateFormatService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string dateFormatMDY(string|mixed $date)
 * @method static string dateFormatYMD(string|mixed $date)
 *
 * @see DateFormatService
 */
class DateFormatFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DateFormatService::class;
    }
}
