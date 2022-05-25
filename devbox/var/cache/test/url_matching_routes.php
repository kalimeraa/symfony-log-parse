<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/healthz' => [[['_route' => 'app_healthcheck_index', '_controller' => 'App\\Controller\\HealthCheckController::index'], null, ['GET' => 0], null, false, false, null]],
        '/count' => [[['_route' => 'app_log_index', '_controller' => 'App\\Controller\\LogController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
