<script setup>
const back = () => {
    window.history.back();
};
</script>
<template>
    <Link class="btn btn-primary btn-sm mb-3 me-3" @click="back"
        ><i class="bx bx-arrow-back"></i
    ></Link>
</template>
