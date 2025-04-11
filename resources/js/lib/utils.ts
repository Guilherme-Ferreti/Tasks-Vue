import { clsx, type ClassValue } from 'clsx';
import { format } from 'date-fns';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export function displayDate(dateString: string) {
    return format(new Date(dateString + 'T00:00'), 'MMMM d, yyyy');
}
