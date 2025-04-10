<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, HasUlids;

    protected $fillable = [
        'name',
        'is_completed',
    ];

    protected function casts()
    {
        return [
            'is_completed' => 'boolean',
        ];
    }
}
