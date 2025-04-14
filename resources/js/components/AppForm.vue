<script setup lang="ts">
defineEmits(['submit']);
</script>

<template>
    <form @submit.prevent="$emit('submit')">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <slot />
        </div>
        <div class="mt-6">
            <slot name="footer" />
        </div>
    </form>
</template>
