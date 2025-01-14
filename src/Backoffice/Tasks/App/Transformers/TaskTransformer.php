<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Tasks\App\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Lightit\Backoffice\Tasks\Domain\Models\Task;

class TaskTransformer extends Transformer
{

    public function transform(Task $task): array
    {
        return [
            'id' => $task->id,
            'title' => $task->title,
            'status' => $task->status,
            'description' => $task->description,
        ];
    }
}
