<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import { Button, buttonVariants } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { PaginatedResponse, TaskCategory } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { Pencil, Trash } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

defineProps<{
    taskCategories: PaginatedResponse<TaskCategory>;
}>();

function deleteTaskCategory(id: string) {
    if (confirm('Are you sure you want to delete this category?')) {
        router.delete(route('task-categories.destroy', id), {
            onSuccess: () => toast.success('Task category deleted successfully!'),
        });
    }
}
</script>

<template>
    <AppLayout>
        <Head title="Task Categories List" />
        <div class="flex justify-end gap-4">
            <Link :class="buttonVariants({ variant: 'secondary' })" :href="route('tasks.index')">Manage Tasks</Link>
            <Link :class="buttonVariants({ variant: 'secondary' })" :href="route('task-categories.create')">Create Category</Link>
        </div>
        <Card>
            <CardContent>
                <Table class="space-y-6">
                    <TableHeader>
                        <TableRow>
                            <TableHead>Name</TableHead>
                            <TableHead class="w-[150px]">Tasks Count</TableHead>
                            <TableHead class="w-[120px] text-right">Actions</TableHead>
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        <TableRow v-for="category in taskCategories.data" :key="category.id">
                            <TableCell>{{ category.name }}</TableCell>
                            <TableCell>{{ category.tasks_count }}</TableCell>
                            <TableCell class="flex justify-end gap-x-2">
                                <Link :href="route('task-categories.edit', category.id)" :class="buttonVariants({ variant: 'secondary' })">
                                    <Pencil />
                                </Link>
                                <Button variant="secondary" @click="deleteTaskCategory(category.id)">
                                    <Trash />
                                </Button>
                            </TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
                <Pagination :meta="taskCategories.meta" />
            </CardContent>
        </Card>
    </AppLayout>
</template>
