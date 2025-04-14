<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Task extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, HasUlids, InteractsWithMedia;

    protected $fillable = [
        'name',
        'due_date',
        'is_completed',
    ];

    protected function casts()
    {
        return [
            'is_completed' => 'boolean',
            'due_date'     => 'date:Y-m-d',
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(TaskCategory::class)->withTimestamps();
    }
}
