<?php

declare(strict_types=1);

namespace Src\Backoffice\Tasks\Domain\DataTransferObjects;

class TaskDTO
{
    public function __construct(
        public string $title,
        public string $status,
        public string $description,
    ) {}
}
