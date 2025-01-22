<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="User" />

    <AuthenticatedLayout>

        <div>
            <h3>Welcome To User Page</h3>
        </div>
    </AuthenticatedLayout>
</template>
