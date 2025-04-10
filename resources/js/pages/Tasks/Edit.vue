<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Switch } from '@/components/ui/switch';
import AppLayout from '@/layouts/AppLayout.vue';
import { Task } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import { Loader2 } from 'lucide-vue-next';
import { toast } from 'vue-sonner';

const props = defineProps<{ task: Task }>();

const form = useForm({
    name: props.task.name,
    is_completed: props.task.is_completed,
});

const submitForm = () => {
    form.put(route('tasks.update', props.task.id), {
        preserveScroll: true,
        onSuccess: () => toast.success('Task updated successfully!'),
    });
};
</script>

<template>
    <AppLayout>
        <Head title="Edit task" />
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <form class="space-y-6" @submit.prevent="submitForm">
                <div class="grid gap-2">
                    <Label htmlFor="name">Task Name *</Label>

                    <Input id="name" v-model="form.name" class="mt-1 block w-full" />

                    <InputError :message="form.errors.name" />
                </div>

                <div class="grid gap-2">
                    <Label htmlFor="is_completed">Completed?</Label>

                    <Switch id="is_completed" v-model="form.is_completed" class="mt-1 cursor-pointer" />

                    <InputError :message="form.errors.is_completed" />
                </div>

                <div class="flex items-center gap-4">
                    <Button type="submit" :disabled="form.processing" variant="default">
                        <Loader2 v-if="form.processing" class="mr-2 h-4 w-4 animate-spin" />
                        {{ form.processing ? 'Please wait' : 'Update Task' }}
                    </Button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
