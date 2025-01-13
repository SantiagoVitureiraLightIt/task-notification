<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employees\Domain\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property string $name
 * @property string $email
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee query()
 * @mixin \Eloquent
 */
class Employee extends Model
{
    protected $guarded = [
        'id',
    ];
}
