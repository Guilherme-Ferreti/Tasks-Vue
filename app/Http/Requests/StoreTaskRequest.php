<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\TaskCategory;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTaskRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'         => ['required', 'string', 'max:255'],
            'due_date'     => ['required', 'date:Y-m-d'],
            'media'        => ['nullable', 'file', 'max:10240'],
            'categories'   => ['present', 'array'],
            'categories.*' => ['string', Rule::exists(TaskCategory::class, 'id')],
        ];
    }
}
