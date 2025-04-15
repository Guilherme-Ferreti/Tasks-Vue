<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import { Button, buttonVariants } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { displayDate } from '@/lib/utils';
import { PaginatedResponse, Task, TaskCategory } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { File, FileAudio, FileImage, FileText, FileVideo, Pencil, Trash } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

const props = defineProps<{
    tasks: PaginatedResponse<Task>;
    categories: TaskCategory[];
    selectedCategories: string[];
}>();

const selectedCategories = props.selectedCategories ? props.selectedCategories : [];

function selectCategory(id: string) {
    const selected = selectedCategories.includes(id) ? selectedCategories.filter((category) => category !== id) : [...selectedCategories, id];

    router.visit('/tasks', { data: { categories: selected } });
}

function deleteTask(id: string) {
    if (confirm('Are you sure you want to delete this task?')) {
        router.delete(route('tasks.destroy', id), {
            onSuccess: () => toast.success('Task deleted successfully!'),
        });
    }
}
</script>

<template>
    <AppLayout>
        <Head title="Tasks List" />
        <div class="flex justify-end gap-4">
            <Link :class="buttonVariants({ variant: 'secondary' })" :href="route('task-categories.index')">Manage Categories</Link>
            <Link :class="buttonVariants({ variant: 'secondary' })" :href="route('tasks.create')">Create Task</Link>
        </div>
        <div class="mt-4 flex flex-row justify-center gap-x-2">
            <Button
                v-for="category in categories"
                :key="category.id"
                @click="selectCategory(category.id.toString())"
                :class="buttonVariants({ variant: selectedCategories.includes(category.id.toString()) ? 'default' : 'secondary' })"
            >
                {{ category.name }} ({{ category.tasks_count }})
            </Button>
        </div>
        <Card>
            <CardContent class="space-y-4">
                <Table>
                    <TableHeader>
                        <TableRow>
                            <TableHead>Task</TableHead>
                            <TableHead class="w-[150px]">File</TableHead>
                            <TableHead class="w-[150px]">Categories</TableHead>
                            <TableHead class="w-[150px]">Status</TableHead>
                            <TableHead class="w-[150px]">Due Date</TableHead>
                            <TableHead class="w-[120px] text-right">Actions</TableHead>
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        <TableRow v-for="task in tasks.data" :key="task.id">
                            <TableCell>{{ task.name }}</TableCell>
                            <TableCell class="text-sm text-gray-600">
                                <span v-if="!task.media">No file.</span>
                                <a v-else :href="task.media.url" target="_blank" :title="task.media.type + ': ' + task.media.name">
                                    <span class="flex items-center justify-between gap-2">
                                        <FileAudio v-if="task.media.type.includes('audio')" />
                                        <FileVideo v-else-if="task.media.type.includes('video')" />
                                        <FileImage v-else-if="task.media.type.includes('image')" />
                                        <FileText v-else-if="task.media.type.includes('pdf')" />
                                        <File v-else />
                                    </span>
                                </a>
                            </TableCell>
                            <TableCell>
                                <template v-if="task.categories.length">
                                    <span
                                        v-for="category in task.categories"
                                        :key="category.id"
                                        class="mr-2 rounded-full bg-gray-200 px-2 py-1 text-gray-800"
                                    >
                                        {{ category.name }}
                                    </span>
                                </template>
                                <span v-else class="text-sm text-gray-600">No categories.</span>
                            </TableCell>
                            <TableCell :class="{ 'text-green-600': task.is_completed, 'text-blue-700': !task.is_completed }">
                                {{ task.is_completed ? 'Completed' : 'In Progress' }}
                            </TableCell>
                            <TableCell>{{ displayDate(task.due_date) }}</TableCell>
                            <TableCell class="flex justify-end gap-x-2">
                                <Link :href="route('tasks.edit', task.id)" :class="buttonVariants({ variant: 'secondary' })">
                                    <Pencil />
                                </Link>
                                <Button variant="secondary" @click="deleteTask(task.id)">
                                    <Trash />
                                </Button>
                            </TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
                <Pagination :meta="tasks.meta" />
            </CardContent>
        </Card>
    </AppLayout>
</template>
