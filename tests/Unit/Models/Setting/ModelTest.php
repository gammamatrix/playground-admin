<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Admin\Models\Setting;

use Playground\Admin\Models\Setting;
use Tests\Unit\Playground\Admin\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Admin\Models\Setting\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Setting::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
