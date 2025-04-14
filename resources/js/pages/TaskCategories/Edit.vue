<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppForm from '@/components/AppForm.vue';
import InputError from '@/components/InputError.vue';
import { Card, CardContent } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem, TaskCategory } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';

const props = defineProps<{ taskCategory: TaskCategory }>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Categories', href: route('task-categories.index') },
    { title: 'Edit', href: '' },
];

const form = useForm({
    _method: 'PUT',
    name: props.taskCategory.name,
});

function submitForm() {
    form.post(route('task-categories.update', props.taskCategory.id), {
        onSuccess: () => toast.success('Task Category updated successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Edit Task Category" />
        <Card>
            <CardContent>
                <AppForm @submit="submitForm">
                    <template #default>
                        <div class="grid gap-2">
                            <Label for="name">Name *</Label>
                            <Input id="name" type="text" v-model="form.name" tabindex="1" autofocus />
                            <InputError :message="form.errors.name" />
                        </div>
                    </template>
                    <template #footer>
                        <AppButton type="submit" variant="default" label="Update" :is-loading="form.processing" tabindex="2" />
                    </template>
                </AppForm>
            </CardContent>
        </Card>
    </AppLayout>
</template>
