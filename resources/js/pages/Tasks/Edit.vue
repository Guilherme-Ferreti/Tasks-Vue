<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppCalendarInput from '@/components/AppCalendarInput.vue';
import InputError from '@/components/InputError.vue';
import Badge from '@/components/ui/badge/Badge.vue';
import { Card, CardContent } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Switch } from '@/components/ui/switch';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem, Task } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { ArrowUpRight } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

const props = defineProps<{ task: Task }>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Edit', href: '' },
];

const form = useForm({
    name: props.task.name,
    due_date: props.task.due_date,
    is_completed: props.task.is_completed,
    media: null as File | null,
    _method: 'PUT',
});

function submitForm() {
    form.post(route('tasks.update', props.task.id), {
        preserveScroll: true,
        onSuccess: () => toast.success('Task updated successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Edit task" />
        <Card>
            <CardContent>
                <form class="space-y-6" @submit.prevent="submitForm">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="grid gap-2">
                            <Label htmlFor="name">Task Name *</Label>
                            <Input id="name" v-model="form.name" class="mt-1 block w-full" />
                            <InputError :message="form.errors.name" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="due_date">Due Date</Label>
                            <AppCalendarInput v-model="form.due_date" />
                            <InputError :message="form.errors.due_date" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="is_completed">Completed?</Label>
                            <Switch id="is_completed" v-model="form.is_completed" class="mt-1 cursor-pointer" />
                            <InputError :message="form.errors.is_completed" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="media">Media</Label>
                            <a v-if="task.media" :href="task.media.url" target="_blank" :title="task.media.name">
                                <Badge variant="secondary">There is a file already attached <ArrowUpRight class="h-4 w-4" /></Badge>
                            </a>
                            <Input id="media" type="file" class="mt-1 block w-full" @change="form.media = $event.target.files?.[0]" />
                            <InputError :message="form.errors.media" />
                        </div>
                    </div>
                    <AppButton type="submit" variant="default" label="Update task" :is-loading="form.processing" />
                </form>
            </CardContent>
        </Card>
    </AppLayout>
</template>
