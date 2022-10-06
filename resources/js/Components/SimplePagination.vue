<template>
    <div class="d-flex justify-content-between">
        <div>
            <Link
                as="button"
                class="btn btn-sm btn-outline-secondary mx-1 my-1"
                :href="links.first_page_url"
                >First</Link
            >
            <Link
                as="button"
                class="btn btn-sm btn-outline-secondary mx-1 my-1"
                :href="links.prev_page_url"
                >&laquo
            </Link>

            <Link
                as="button"
                class="btn btn-sm btn-primary mx-1 my-1"
                :href="links.current_page"
                v-html="links.current_page"
                disabled
            ></Link>

            <Link
                as="button"
                class="btn btn-sm btn-outline-secondary mx-1 my-1"
                :href="links.next_page_url"
                >&raquo
            </Link>
            <Link
                as="button"
                class="btn btn-sm btn-outline-secondary mx-1 my-1"
                :href="links.last_page_url"
                >Last</Link
            >
        </div>
        <div>
            <div class="btn btn-sm btn-secondary my-1 mx-1">
                Total : {{ links.total }}
            </div>
        </div>
    </div>
</template>
<script setup>
import { defineProps } from "vue";
defineProps({
    links: Object,
});
</script>
