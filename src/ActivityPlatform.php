<?php

namespace Spatie\Activitylog;

use App\Constants\ActivityTypes;
use Illuminate\Contracts\Config\Repository;
use Spatie\Activitylog\Contracts\PlatformTypes;

class ActivityPlatform
{
    protected $platform;

    public function __construct()
    {
        $this->platform = PlatformTypes::WEB_APPLICATION;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     */
    public function setPlatform(string $platform): void
    {
        $this->platform = $platform;
    }
}
