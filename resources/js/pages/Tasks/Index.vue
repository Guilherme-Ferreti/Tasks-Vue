<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import { Button, buttonVariants } from '@/components/ui/button';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { PaginatedResponse, Task } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { format } from 'date-fns';
import { Pencil, Trash } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

defineProps<{ tasks: PaginatedResponse<Task> }>();

const deleteTask = (id: string) => {
    if (confirm('Are you sure you want to delete this task?')) {
        router.delete(route('tasks.destroy', id));
        toast.success('Task deleted successfully!');
    }
};
</script>

<template>
    <AppLayout>
        <Head title="Tasks" />
        <div class="mt-4 flex justify-end">
            <Link :class="buttonVariants({ variant: 'outline' })" :href="route('tasks.create')">Create task</Link>
        </div>
        <Table>
            <TableHeader>
                <TableRow>
                    <TableHead>Task</TableHead>
                    <TableHead>Due Date</TableHead>
                    <TableHead>Status</TableHead>
                    <TableHead class="text-right">Actions</TableHead>
                </TableRow>
            </TableHeader>
            <TableBody>
                <TableRow v-for="task in tasks.data" :key="task.id">
                    <TableCell>{{ task.name }}</TableCell>
                    <TableCell>{{ format(new Date(task.due_date), 'MMMM d, yyyy') }}</TableCell>
                    <TableCell :class="{ 'text-green-600': task.is_completed, 'text-blue-700': !task.is_completed }">
                        {{ task.is_completed ? 'Completed' : 'In Progress' }}
                    </TableCell>
                    <TableCell class="flex justify-end gap-x-2">
                        <Link :href="route('tasks.edit', task.id)" :class="buttonVariants({ variant: 'outline' })">
                            <Pencil />
                        </Link>
                        <Button variant="outline" @click="deleteTask(task.id)">
                            <Trash />
                        </Button>
                    </TableCell>
                </TableRow>
            </TableBody>
        </Table>
        <Pagination :response="tasks" />
    </AppLayout>
</template>
