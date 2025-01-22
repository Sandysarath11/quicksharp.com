<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Bars3Icon, BellIcon, CalendarIcon, ChartPieIcon, Cog6ToothIcon, DocumentDuplicateIcon, FolderIcon, HomeIcon, UsersIcon, XMarkIcon } from '@heroicons/vue/24/outline'

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
    icon:{
        type: String,
    }
});

const classes = computed(() =>
    props.active
        ? 'bg-gray-50 text-indigo-600'
        : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600','group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold'
);
const iconClasses = 'w-6 h-6';
</script>

<template>
    <Link :href="href" :class="['group flex items-center gap-x-3 rounded-md p-2 text-sm font-semibold', classes]">
        <component :is="props.icon" :class="iconClasses"/>
        <slot />
    </Link>
</template>
