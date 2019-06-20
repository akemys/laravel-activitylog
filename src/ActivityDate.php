<?php

namespace Spatie\Activitylog;

use App\Constants\ActivityTypes;
use Carbon\Carbon;
use Illuminate\Contracts\Config\Repository;
use Spatie\Activitylog\Contracts\PlatformTypes;

class ActivityDate
{
    protected $date = null;

    /**
     * @return static
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param static $date
     */
    public function setDate(Carbon $date = null): void
    {
        $this->date = $date;
    }
}
