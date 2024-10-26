<template>
    <div>Index</div>
    <p>Messa: {{ message }}</p>
    <a href="/hello">Show Page</a>

</template>

<script setup>
 import {Link} from '@inertiajs/vue3';
 defineProps({
    message: String
 });
</script>

