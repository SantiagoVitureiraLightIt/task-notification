<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employees\App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lightit\Backoffice\Employee\Domain\Models\Employee;
use Symfony\Component\HttpFoundation\JsonResponse;

class StoreEmployeeController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
        ]);

        Employee::create($validated);

        return response()->json(['message' => 'Employee created successfully!'], 201);
    }
}
