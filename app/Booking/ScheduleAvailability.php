<?php

namespace App\Booking;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Spatie\Period\PeriodCollection;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct()
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        collect(CarbonPeriod::create($startsAt, $endsAt)->days())
            ->each(function (Carbon $date) {
                dump($date->format('l'));
            });

        return $this->periods;
    }
}
