<?php

namespace Tests\Unit;

use App\Facades\DateFormatFacade;
use App\Services\DateFormatService;
use Carbon\Carbon;
use Tests\TestCase;

class ExampleTest extends TestCase
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
}
