<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppCalendarInput from '@/components/AppCalendarInput.vue';
import AppForm from '@/components/AppForm.vue';
import InputError from '@/components/InputError.vue';
import Badge from '@/components/ui/badge/Badge.vue';
import { Card, CardContent } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Switch } from '@/components/ui/switch';
import { ToggleGroup, ToggleGroupItem } from '@/components/ui/toggle-group';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem, Task, TaskCategory } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { ArrowUpRight } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

const props = defineProps<{ task: Task; categories: TaskCategory[] }>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Edit', href: '' },
];

const form = useForm({
    _method: 'PUT',
    name: props.task.name,
    due_date: props.task.due_date,
    is_completed: props.task.is_completed,
    media: null as File | null,
    categories: props.task.categories.map((category: TaskCategory) => category.id),
});

function submitForm() {
    form.post(route('tasks.update', props.task.id), {
        onSuccess: () => toast.success('Task updated successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Edit Task" />
        <Card>
            <CardContent>
                <AppForm @submit="submitForm">
                    <template #default>
                        <div class="grid gap-2">
                            <Label for="name">Task Name *</Label>
                            <Input id="name" type="text" v-model="form.name" tabindex="1" autofocus />
                            <InputError :message="form.errors.name" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="due_date">Due Date</Label>
                            <AppCalendarInput v-model="form.due_date" tabindex="2" />
                            <InputError :message="form.errors.due_date" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="is_completed">Completed?</Label>
                            <Switch id="is_completed" v-model="form.is_completed" class="cursor-pointer" tabindex="3" />
                            <InputError :message="form.errors.is_completed" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="media">Media</Label>
                            <a v-if="task.media" :href="task.media.url" target="_blank" :title="task.media.name">
                                <Badge variant="secondary">There is a file already attached <ArrowUpRight class="h-4 w-4" /></Badge>
                            </a>
                            <Input id="media" type="file" @change="form.media = $event.target.files?.[0]" tabindex="4" />
                            <InputError :message="form.errors.media" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="categories">Categories</Label>

                            <ToggleGroup type="multiple" variant="outline" size="lg" v-model="form.categories">
                                <ToggleGroupItem v-for="category in categories" :key="category.id" :value="category.id">
                                    {{ category.name }}
                                </ToggleGroupItem>
                            </ToggleGroup>

                            <InputError :message="form.errors.categories" />
                        </div>
                    </template>
                    <template #footer>
                        <AppButton type="submit" variant="default" label="Update" :is-loading="form.processing" tabindex="5" />
                    </template>
                </AppForm>
            </CardContent>
        </Card>
    </AppLayout>
</template>
