<script setup lang="ts">
import { PaginatedResponse } from '@/types';
import { Link } from '@inertiajs/vue3';
import {
    Pagination,
    PaginationContent,
    PaginationEllipsis,
    PaginationFirst,
    PaginationItem,
    PaginationLast,
    PaginationNext,
    PaginationPrevious,
} from './ui/pagination';

defineProps<{ response: PaginatedResponse }>();
</script>

<template>
    <Pagination
        :page="response.current_page"
        :default-page="1"
        :items-per-page="response.per_page"
        :total="response.total"
        :sibling-count="5"
        :show-edges="false"
    >
        <PaginationContent>
            <Link :href="response.first_page_url" :preserve-scroll="true">
                <PaginationFirst />
            </Link>

            <template v-for="(link, index) in response.links" :key="index">
                <PaginationEllipsis v-if="link.label.includes('...')" />
                <Link v-else :href="link.url ?? ''" :preserve-scroll="true">
                    <PaginationPrevious v-if="link.label.includes('Previous')" />
                    <PaginationNext v-else-if="link.label.includes('Next')" />
                    <PaginationItem v-else :value="+link.label" />
                </Link>
            </template>

            <Link :href="response.last_page_url" :preserve-scroll="true">
                <PaginationLast />
            </Link>
        </PaginationContent>
    </Pagination>
</template>
