<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';
import AppLayout from '@/layouts/AppLayout.vue';
import { SharedData, User, type BreadcrumbItem } from '@/types';
import { Head, usePage } from '@inertiajs/vue3';

const page = usePage<SharedData>();
const user = page.props.auth.user as User;

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <Card>
            <CardContent>
                <p>Hello {{ user.name }}!</p>
            </CardContent>
        </Card>
    </AppLayout>
</template>
