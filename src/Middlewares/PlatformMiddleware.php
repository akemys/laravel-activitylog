<?php
/**
 * Created by Feki Webstudio - 2019-06-20
 * @author szilardlukacsi
 * @copyright Copyright (c) 2019, Feki Webstudio Kft.
 */

namespace Spatie\Activitylog\Middlewares;

use Closure;
use Spatie\Activitylog\ActivityPlatform;
use Spatie\Permission\Exceptions\UnauthorizedException;

class PlatformMiddleware
{
    public function handle($request, Closure $next, $platform)
    {
        app(ActivityPlatform::class)->setPlatform($platform);

        return $next($request);
    }
}