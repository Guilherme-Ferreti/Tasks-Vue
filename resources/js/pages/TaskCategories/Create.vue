<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppForm from '@/components/AppForm.vue';
import InputError from '@/components/InputError.vue';
import { Card, CardContent } from '@/components/ui/card';
import Input from '@/components/ui/input/Input.vue';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Categories', href: route('task-categories.index') },
    { title: 'Create', href: '' },
];

const form = useForm({
    name: '',
});

function submitForm() {
    form.post(route('task-categories.store'), {
        preserveScroll: true,
        onSuccess: () => toast.success('Task category created successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Create Task Category" />
        <Card>
            <CardContent>
                <AppForm @submit="submitForm">
                    <template #default>
                        <div class="grid gap-2">
                            <Label for="name">Name *</Label>
                            <Input type="text" id="name" v-model="form.name" tabindex="1" autofocus />
                            <InputError :message="form.errors.name" />
                        </div>
                    </template>
                    <template #footer>
                        <AppButton type="submit" variant="default" label="Create category" :isLoading="form.processing" tabindex="2" />
                    </template>
                </AppForm>
            </CardContent>
        </Card>
    </AppLayout>
</template>
