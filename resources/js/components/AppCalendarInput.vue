<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Calendar } from '@/components/ui/calendar';
import { Popover, PopoverContent, PopoverTrigger } from '@/components/ui/popover';
import { cn, displayDate } from '@/lib/utils';
import { type DateValue, parseDate } from '@internationalized/date';
import { CalendarIcon } from 'lucide-vue-next';
import { computed } from 'vue';

const emit = defineEmits<{
    (e: 'update:modelValue', value: string): void;
}>();

const props = defineProps({
    modelValue: {
        type: String,
        default: '',
    },
});

const inputValue = computed({
    get: () => {
        return props.modelValue ? parseDate(props.modelValue) : undefined;
    },
    set: (value: DateValue | undefined) => {
        emit('update:modelValue', value ? value.toString() : '');
    },
});

const dateFormatted = computed(() => {
    if (!inputValue.value) return '';

    return displayDate(inputValue.value.toString());
});
</script>

<template>
    <Popover>
        <PopoverTrigger as-child>
            <Button variant="outline" :class="cn('justify-start text-left font-normal', !modelValue && 'text-muted-foreground')">
                <CalendarIcon class="mr-2 h-4 w-4" />
                {{ dateFormatted || 'Pick a date' }}
            </Button>
        </PopoverTrigger>
        <PopoverContent class="w-auto p-0">
            <Calendar v-model="inputValue" initial-focus />
        </PopoverContent>
    </Popover>
</template>
