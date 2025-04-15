<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'is_completed' => $this->is_completed,
            'due_date'     => $this->due_date->format('Y-m-d'),

            'media' => $this->when($this->getFirstMedia(), fn () => [
                'url'  => $this->getFirstMediaUrl(),
                'name' => $this->getFirstMedia()->name,
                'type' => $this->getFirstMedia()->mime_type,
            ], null),

            'categories' => TaskCategoryResource::collection($this->categories),
        ];
    }
}
