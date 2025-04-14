<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppCalendarInput from '@/components/AppCalendarInput.vue';
import AppForm from '@/components/AppForm.vue';
import InputError from '@/components/InputError.vue';
import { Card, CardContent } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Create', href: '' },
];

const form = useForm({
    name: '',
    due_date: '',
    media: null as File | null,
});

function submitForm() {
    form.post(route('tasks.store'), {
        preserveScroll: true,
        onSuccess: () => toast.success('Task created successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Create task" />
        <Card>
            <CardContent>
                <AppForm @submit="submitForm">
                    <template #default>
                        <div class="grid gap-2">
                            <Label htmlFor="name">Task Name *</Label>
                            <Input id="name" v-model="form.name" class="mt-1 block w-full" />
                            <InputError :message="form.errors.name" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="due_date">Due Date</Label>
                            <AppCalendarInput v-model="form.due_date" id="due_date" class="mt-1 block w-full" />
                            <InputError :message="form.errors.due_date" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="media">Media</Label>
                            <Input id="media" type="file" class="mt-1 block w-full" @change="form.media = $event.target.files?.[0]" />
                            <InputError :message="form.errors.media" />
                        </div>
                    </template>
                    <template #footer>
                        <AppButton type="submit" variant="default" label="Create task" :isLoading="form.processing" />
                    </template>
                </AppForm>
            </CardContent>
        </Card>
    </AppLayout>
</template>
