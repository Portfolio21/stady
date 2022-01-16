<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Label
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property int $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class Label extends Model
{
    /**
     * @return BelongsToMany
     */
    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'task_labels', 'label_id', 'task_id');
    }
}
