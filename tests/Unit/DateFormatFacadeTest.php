<?php

namespace Tests\Unit;

use App\Services\DateFormatService;
use App\Services\Facades\DateFormatFacade;
use Tests\TestCase;

class DateFormatFacadeTest extends TestCase
{
    /** @test */
    public function it_can_run_methods()
    {
        $result = (new DateFormatService())->dateFormatMDY('2021-04-16');
        $this->assertEquals("04/16/2021", $result);

        $result = (new DateFormatService())->dateFormatYMD('04/16/2021');
        $this->assertEquals("2021-04-16", $result);
    }

    /** @test */
    public function it_can_use_date_format_facade()
    {
        $result = DateFormatFacade::dateFormatMDY('2021-04-16');
        $this->assertEquals("04/16/2021", $result);

        $result = DateFormatFacade::dateFormatYMD('04/16/2021');
        $this->assertEquals("2021-04-16", $result);
    }

    /** @test */
    public function it_can_use_carbon_instance_date_format_facade()
    {
        $result = DateFormatFacade::dateFormatMDY(now());
        $this->assertEquals(now()->format('m/d/Y'), $result);

        $result = DateFormatFacade::dateFormatYMD(now());
        $this->assertEquals(now()->format('Y-m-d'), $result);
    }
}
