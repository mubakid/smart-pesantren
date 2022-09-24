<template>
    <AppLayout>
        <h1>{{ msg }}</h1>

        <p>
            <a href="https://vitejs.dev/guide/features.html" target="_blank">
                Vite Documentation
            </a>
            |
            <a href="https://v3.vuejs.org/" target="_blank"
                >Vue 3 Documentation</a
            >
        </p>

        <MDBBtn color="primary" class="mb-3" @click="state.count++">
            count is: {{ state.count }}
        </MDBBtn>

        <p>Edit components/HelloWorld.vue to test hot module replacement.</p>
    </AppLayout>
</template>
<script setup>
import AppLayout from "../Shared/AppLayout.vue";
import { defineProps, reactive } from "vue";
import { MDBBtn } from "mdb-vue-ui-kit";

defineProps({
    msg: String,
});

const state = reactive({ count: 0 });
</script>
<style scoped>
a {
    color: #42b983;
}
</style>
