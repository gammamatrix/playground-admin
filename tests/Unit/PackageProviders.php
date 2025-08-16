<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Admin;

/**
 * \Tests\Unit\Playground\Admin\PackageProviders
 */
trait PackageProviders
{
    protected string $package_providers_dir = __DIR__;

    protected function getPackageProviders($app)
    {
        return [
            \Playground\Test\ServiceProvider::class,
            \Playground\ServiceProvider::class,
            \Playground\Admin\ServiceProvider::class,
        ];
    }
}
