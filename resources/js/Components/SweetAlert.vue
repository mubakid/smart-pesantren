<template>
    <div v-if="$page.props.flash.message"></div>
</template>
<script>
import Swal from "sweetalert2";
import { computed } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";
</script>
