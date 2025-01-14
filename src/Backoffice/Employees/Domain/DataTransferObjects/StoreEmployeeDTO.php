<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employees\Domain\DataTransferObjects;

class StoreEmployeeDTO
{
    public function __construct(
        public string $email,
        public string $name,
    ) {
    }
}
