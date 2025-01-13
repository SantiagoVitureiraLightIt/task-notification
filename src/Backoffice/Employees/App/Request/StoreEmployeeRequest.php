<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employees\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Lightit\Backoffice\Employees\Domain\DataTransferObjects\StoreEmployeeDTO;

class StoreEmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:strict', 'unique'],
        ];
    }

    public function toDto(): StoreEmployeeDTO
    {
        return new StoreEmployeeDTO(
            email: $this->string('email')->toString(),
            name: $this->string('name')->toString(),
        );
    }
}
