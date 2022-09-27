<template>
    <v-select
        v-model="selected"
        :reduce="(option) => option.id"
        :options="options"
    ></v-select>
</template>
<script setup>
import { ref } from "vue";
let selected = ref(3);
let options = ref([
    {
        id: 1,
        label: "One",
    },
    {
        id: 2,
        label: "Duaa",
    },
    {
        id: "telu",
        label: "3",
    },
]);
</script>
