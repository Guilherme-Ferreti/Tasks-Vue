<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\TaskCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TaskCategoryController extends Controller
{
    public function index()
    {
        dd(TaskCategory::all());
    }

    public function create(): Response
    {
        return Inertia::render('TaskCategories/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:task_categories'],
        ]);

        TaskCategory::create($attributes);

        return to_route('task-categories.index');
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
