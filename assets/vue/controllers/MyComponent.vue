<template>
    <div>Hello {{ name }}!</div>
    <i class="fa-solid fa-house"></i>
</template>

<script setup>
    defineProps({
        name: String
    });
</script>