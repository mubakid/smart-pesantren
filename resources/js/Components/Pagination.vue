<template>
    <tr>
        <div class="d-md-flex justify-content-end">
            <template v-for="(link, key) in links" :key="key">
                <div class="" v-if="link.url === null"></div>
                <Link
                    v-else
                    :href="link.url"
                    v-html="link.label"
                    class="btn btn-sm btn-outline-secondary mx-1 my-1"
                    :class="{ 'btn-primary': link.active }"
                ></Link>
            </template>
        </div>
    </tr>
</template>
<script setup>
import { defineProps } from "vue";
defineProps({
    links: Object,
});
</script>
