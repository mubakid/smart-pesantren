<template>
    <div></div>
</template>
<script setup>
import { provide } from "vue";

const count = ref(0);
provide("count", count);
provide(count);
</script>
