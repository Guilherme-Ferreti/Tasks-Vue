<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';
import AppLayout from '@/layouts/AppLayout.vue';
import { BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Task categories', href: route('task-categories.create') },
    { title: 'Create', href: '' },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Create task category" />
        <Card>
            <CardContent>
                <h1>Create task category</h1>
            </CardContent>
        </Card>
    </AppLayout>
</template>
