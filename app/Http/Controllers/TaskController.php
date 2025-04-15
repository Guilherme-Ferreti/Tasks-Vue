<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\TaskCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{
    public function index(Request $request): Response
    {
        $tasks = Task::query()
            ->orderBy('is_completed')
            ->orderBy('due_date')
            ->with('media', 'categories')
            ->when(
                $request->has('categories'),
                fn ($query) => $query->whereHas('categories', fn ($query) => $query->whereIn('id', $request->query('categories'))
                ))
            ->paginate(10)
            ->withQueryString();

        $categories = TaskCategory::query()
            ->withCount('tasks')
            ->get();

        return Inertia::render('Tasks/Index', [
            'tasks'              => $tasks->toResourceCollection(),
            'categories'         => $categories->toResourceCollection(),
            'selectedCategories' => $request->query('categories'),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Tasks/Create', [
            'categories' => TaskCategory::all()->toResourceCollection(),
        ]);
    }

    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $task = Task::create($request->validated());

        if ($request->file('media')) {
            $task->addMedia($request->file('media'))->toMediaCollection();
        }

        $task->categories()->attach($request->validated('categories', []));

        return to_route('tasks.index');
    }

    public function edit(Task $task): Response
    {
        $task->load('media', 'categories');

        return Inertia::render('Tasks/Edit', [
            'task'       => $task->toResource(),
            'categories' => TaskCategory::all()->toResourceCollection(),
        ]);
    }

    public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
    {
        $task->update($request->validated());

        if ($request->file('media')) {
            $task->clearMediaCollection();
            $task->addMedia($request->file('media'))->toMediaCollection();
        }

        $task->categories()->sync($request->validated('categories', []));

        return to_route('tasks.index');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return to_route('tasks.index');
    }
}
