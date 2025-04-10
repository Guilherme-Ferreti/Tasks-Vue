<script setup lang="ts">
import Pagination from '@/components/Pagination.vue';
import { Button, buttonVariants } from '@/components/ui/button';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { displayDate } from '@/lib/utils';
import { PaginatedResponse, Task } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { File, FileAudio, FileImage, FileText, FileVideo, Pencil, Trash } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

defineProps<{ tasks: PaginatedResponse<Task> }>();

function deleteTask(id: string) {
    if (confirm('Are you sure you want to delete this task?')) {
        router.delete(route('tasks.destroy', id));
        toast.success('Task deleted successfully!');
    }
}
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
                    <TableHead class="w-[150px]">File</TableHead>
                    <TableHead class="w-[150px]">Due Date</TableHead>
                    <TableHead class="w-[120px]">Status</TableHead>
                    <TableHead class="w-[120px]">Actions</TableHead>
                </TableRow>
            </TableHeader>
            <TableBody>
                <TableRow v-for="task in tasks.data" :key="task.id">
                    <TableCell>{{ task.name }}</TableCell>
                    <TableCell class="text-sm text-gray-600">
                        <span v-if="!task.media">No file.</span>
                        <a v-else :href="task.media.url" target="_blank" :title="task.media.name">
                            <span class="flex items-center justify-between">
                                {{ task.media.type }}
                                <FileAudio v-if="task.media.type.includes('audio')" />
                                <FileVideo v-else-if="task.media.type.includes('video')" />
                                <FileImage v-else-if="task.media.type.includes('image')" />
                                <FileText v-else-if="task.media.type.includes('pdf')" />
                                <File v-else />
                            </span>
                        </a>
                    </TableCell>
                    <TableCell>{{ displayDate(task.due_date) }}</TableCell>
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
        <Pagination :meta="tasks.meta" />
    </AppLayout>
</template>
