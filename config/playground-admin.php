<?php

declare(strict_types=1);

/**
 * Playground: Admin Configuration and Environment Variables
 *
 * @return array{
 *     about: bool,
 *     load: array{migrations: bool}
 * }
 */
return [
    /*
    |--------------------------------------------------------------------------
    | About Information
    |--------------------------------------------------------------------------
    |
    | By default, information will be displayed about this package when using:
    |
    | `artisan about`
    |
    */

    'about' => (bool) env('PLAYGROUND_ADMIN_ABOUT', true),

    /*
    |--------------------------------------------------------------------------
    | Loading
    |--------------------------------------------------------------------------
    |
    | By default, migrations are disabled.
    |
    */

    'load' => [
        'migrations' => (bool) env('PLAYGROUND_ADMIN_LOAD_MIGRATIONS', false),
    ],
];
