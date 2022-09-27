<template>
    <ul class="metismenu" id="menu" v-if="role == 'admin'">
        <li>
            <Link :href="route('home')">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </Link>
        </li>
        <li>
            <Link :href="route('home')">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Santri</div>
            </Link>
        </li>
    </ul>
    <ul class="metismenu" id="menu" v-if="role == 'santri_baru'">
        <li>
            <Link :href="route('home')">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </Link>
        </li>
        <li>
            <Link :href="route('biodata')">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Biodata</div>
            </Link>
        </li>
    </ul>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
const props = defineProps({
    role: String,
});
// let menu = ref(true);
// switch (props.role) {
//     case "santri_baru":
//         menu.value = true;
//         break;
//     case "admin":
//         console.log("yes");
//         break;
//     default:
//     // code block
// }
</script>
