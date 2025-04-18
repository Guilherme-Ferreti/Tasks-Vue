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
    public function index(): Response
    {
        $taskCategories = TaskCategory::query()
            ->withCount('tasks')
            ->paginate(10);

        return Inertia::render('TaskCategories/Index', [
            'taskCategories' => $taskCategories->toResourceCollection(),
        ]);
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

    public function edit(TaskCategory $taskCategory): Response
    {
        return Inertia::render('TaskCategories/Edit', [
            'taskCategory' => $taskCategory->toResource(),
        ]);
    }

    public function update(Request $request, TaskCategory $taskCategory)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255', "unique:task_categories,id,$taskCategory->id"],
        ]);

        $taskCategory->update($attributes);

        return to_route('task-categories.index');
    }

    public function destroy(TaskCategory $taskCategory): RedirectResponse
    {
        $taskCategory->delete();

        return to_route('task-categories.index');
    }
}
