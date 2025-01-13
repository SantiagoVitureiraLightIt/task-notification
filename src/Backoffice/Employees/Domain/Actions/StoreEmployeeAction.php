<?php

declare(strict_types=1);


namespace Lightit\Backoffice\Employees\Domain\Actions;

use Lightit\Backoffice\Employees\Domain\DataTransferObjects\StoreEmployeeDTO;
use Lightit\Backoffice\Employees\Domain\Models\Employee;

class StoreEmployeeAction
{
    public function execute(StoreEmployeeDTO $dto): Employee
    {
        return Employee::create([
            'name' => $dto->name,
            'email' => $dto->email,
        ]);
    }
}
