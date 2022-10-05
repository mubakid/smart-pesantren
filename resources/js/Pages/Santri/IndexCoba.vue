<template>
    <AppLayout>
        <h1>{{ form.ok }}</h1>
        <div>
            <input type="text" v-model="form.ok" />
        </div>
    </AppLayout>
</template>
<script setup>
import { ref, reactive } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
const form = reactive({
    ok: "",
});
</script>
