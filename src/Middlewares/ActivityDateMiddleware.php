<?php
/**
 * Created by Feki Webstudio - 2019-06-20
 * @author szilardlukacsi
 * @copyright Copyright (c) 2019, Feki Webstudio Kft.
 */

namespace Spatie\Activitylog\Middlewares;

use Carbon\Carbon;
use Closure;
use Spatie\Activitylog\ActivityDate;
use Spatie\Activitylog\ActivityPlatform;
use Spatie\Permission\Exceptions\UnauthorizedException;

class ActivityDateMiddleware
{
    public function handle($request, Closure $next)
    {
        $dateKey = config('activitylog.overwrite_created_at_key');

        if ($date = $request->get($dateKey)) {
            app(ActivityDate::class)->setDate(Carbon::parse($date)->setTimezone(config('app.timezone')));
        }

        return $next($request);
    }
}