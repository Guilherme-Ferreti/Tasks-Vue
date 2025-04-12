<script setup lang="ts">
import { Loader2 } from 'lucide-vue-next';
import { Button, ButtonVariants } from './ui/button';

defineProps<{
    label: string;
    variant?: ButtonVariants['variant'];
    isLoading?: boolean;
    type: 'button' | 'submit' | 'reset';
}>();
</script>

<template>
    <Button :variant="variant" :disabled="isLoading" :type="type">
        <Loader2 v-if="isLoading" class="mr-2 h-4 w-4 animate-spin" />
        {{ isLoading ? 'Please wait' : 'Create Task' }}
    </Button>
</template>
