<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import { buttonVariants } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { PaginatedResponse, TaskCategory } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    taskCategories: PaginatedResponse<TaskCategory>;
}>();
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
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        <TableRow v-for="category in taskCategories.data" :key="category.id">
                            <TableCell>{{ category.name }}</TableCell>
                            <TableCell>{{ category.tasks_count }}</TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
                <Pagination :meta="taskCategories.meta" />
            </CardContent>
        </Card>
    </AppLayout>
</template>
