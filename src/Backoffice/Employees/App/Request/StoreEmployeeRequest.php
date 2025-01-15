<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employees\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Lightit\Backoffice\Employees\Domain\DataTransferObjects\StoreEmployeeDTO;

class StoreEmployeeRequest extends FormRequest
{
    public const NAME = 'name';
    public const EMAIL = 'email';

    public function rules(): array
    {
        return [
            SELF::NAME => ['required', 'string', 'max:255'],
            SELF::EMAIL => ['required', 'email:strict', 'unique'],
        ];
    }

    public function toDto(): StoreEmployeeDTO
    {
        return new StoreEmployeeDTO(
            name: $this->string(SELF::NAME)->toString(),
            email: $this->string(SELF::EMAIL)->toString(),
        );
    }
}
