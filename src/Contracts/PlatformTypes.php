<?php

namespace Spatie\Activitylog\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

interface PlatformTypes
{
    const WEB_APPLICATION = 'web_application';
    const MOBILE_APPLICATION = 'mobile_application';
}
