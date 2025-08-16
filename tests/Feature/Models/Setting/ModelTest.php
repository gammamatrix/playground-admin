<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Admin\Models\Setting;

use Tests\Feature\Playground\Admin\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Admin\Models\Setting\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Admin\Models\Setting::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Admin\Models\Setting::class,
        ],
    ];
}
