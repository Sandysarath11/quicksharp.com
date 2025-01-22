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
</script>

<template>
    <Link :href="href" :class="classes">
        <icon style="width: 25px;height: 30px;"/> <slot />
    </Link>
</template>
