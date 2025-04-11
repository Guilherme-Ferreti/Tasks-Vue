<script setup lang="ts">
import AppCalendarInput from '@/components/AppCalendarInput.vue';
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { Loader2 } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Create', href: '' },
];

const form = useForm({
    name: '',
    due_date: '',
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
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <form class="space-y-6" @submit.prevent="submitForm">
                <div class="grid gap-2">
                    <Label htmlFor="name">Task Name *</Label>
                    <Input id="name" v-model="form.name" class="mt-1 block w-full" />
                    <InputError :message="form.errors.name" />
                </div>
                <div class="grid gap-2">
                    <Label htmlFor="name">Due Date</Label>
                    <AppCalendarInput v-model="form.due_date" />
                    <InputError :message="form.errors.due_date" />
                </div>
                <div class="flex items-center gap-4">
                    <Button type="submit" :disabled="form.processing" variant="default">
                        <Loader2 v-if="form.processing" class="mr-2 h-4 w-4 animate-spin" />
                        {{ form.processing ? 'Please wait' : 'Create Task' }}
                    </Button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
