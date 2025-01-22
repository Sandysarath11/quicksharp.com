<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Project" />

    <AuthenticatedLayout>

        <div>
            <h3>Welcome To Project Page</h3>
        </div>
    </AuthenticatedLayout>
</template>
