<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Task
 *
 * @property int $id
 * @property int $creatorId
 * @property int $statusId
 * @property string $title
 * @property string $content
 * @property int $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class Task extends Model
{
    /**
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(Label::class, 'task_labels', 'task_id', 'label_id');
    }
}
