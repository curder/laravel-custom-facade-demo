<?php

namespace Tests\Unit;

use App\Services\DateFormatService;
use App\Services\Facades\DateFormat;
use Tests\TestCase;

class DateFormatFacadeTest extends TestCase
{
    /** @test */
    public function it_can_run_methods()
    {
        $result = (new DateFormatService())->mdy('2021-04-16');
        $this->assertEquals("04/16/2021", $result);

        $result = (new DateFormatService())->ymd('04/16/2021');
        $this->assertEquals("2021-04-16", $result);
    }

    /** @test */
    public function it_can_use_date_format_facade()
    {
        $result = DateFormat::mdy('2021-04-16');
        $this->assertEquals("04/16/2021", $result);

        $result = DateFormat::ymd('04/16/2021');
        $this->assertEquals("2021-04-16", $result);
    }

    /** @test */
    public function it_can_use_carbon_instance_date_format_facade()
    {
        $result = DateFormat::mdy(now());
        $this->assertEquals(now()->format('m/d/Y'), $result);

        $result = DateFormat::ymd(now());
        $this->assertEquals(now()->format('Y-m-d'), $result);
    }
}
