<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppCalendarInput from '@/components/AppCalendarInput.vue';
import AppForm from '@/components/AppForm.vue';
import InputError from '@/components/InputError.vue';
import { Card, CardContent } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { ToggleGroup, ToggleGroupItem } from '@/components/ui/toggle-group';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem, TaskCategory } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';

defineProps<{ categories: TaskCategory[] }>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Tasks', href: route('tasks.index') },
    { title: 'Create', href: '' },
];

const form = useForm({
    name: '',
    due_date: '',
    media: null as File | null,
    categories: [],
});

function submitForm() {
    form.post(route('tasks.store'), {
        onSuccess: () => toast.success('Task created successfully!'),
    });
}
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Create Task" />
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
                            <Label for="due_date">Due Date *</Label>
                            <AppCalendarInput id="due_date" v-model="form.due_date" tabindex="2" />
                            <InputError :message="form.errors.due_date" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="media">Media</Label>
                            <Input id="media" type="file" @change="form.media = $event.target.files?.[0]" tabindex="3" class="cursor-pointer" />
                            <InputError :message="form.errors.media" />
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="categories">Categories</Label>

                            <ToggleGroup type="multiple" variant="outline" size="lg" v-model="form.categories">
                                <ToggleGroupItem v-for="category in categories" :key="category.id" :value="category.id" class="cursor-pointer">
                                    {{ category.name }}
                                </ToggleGroupItem>
                            </ToggleGroup>

                            <InputError :message="form.errors.categories" />
                        </div>
                    </template>
                    <template #footer>
                        <AppButton type="submit" variant="default" label="Create" :isLoading="form.processing" tabindex="4" />
                    </template>
                </AppForm>
            </CardContent>
        </Card>
    </AppLayout>
</template>
