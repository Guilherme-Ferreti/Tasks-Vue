<script setup lang="ts">
import { PaginationMeta } from '@/types';
import { Link } from '@inertiajs/vue3';
import { Pagination, PaginationContent, PaginationEllipsis, PaginationItem, PaginationNext, PaginationPrevious } from './ui/pagination';

defineProps<{ meta: PaginationMeta }>();
</script>

<template>
    <Pagination
        :page="meta.current_page"
        :default-page="1"
        :items-per-page="meta.per_page"
        :total="meta.total"
        :sibling-count="5"
        :show-edges="false"
    >
        <PaginationContent>
            <!-- <Link :href="meta.first_page_url" :preserve-scroll="true">
                <PaginationFirst />
            </Link> -->

            <template v-for="(link, index) in meta.links" :key="index">
                <PaginationEllipsis v-if="link.label.includes('...')" />
                <Link v-else :href="link.url || ''" :preserve-scroll="true">
                    <PaginationPrevious v-if="link.label.includes('Previous')" />
                    <PaginationNext v-else-if="link.label.includes('Next')" />
                    <PaginationItem v-else :value="+link.label" />
                </Link>
            </template>

            <!-- <Link :href="meta.last_page_url" :preserve-scroll="true">
                <PaginationLast />
            </Link> -->
        </PaginationContent>
    </Pagination>
</template>
