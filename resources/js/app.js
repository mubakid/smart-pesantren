import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h, ref } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";

// css
import "../../public/assets/images/favicon.png";
import "../../public/assets/plugins/simplebar/css/simplebar.css";
// import "../../public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css";
import "../../public/assets/plugins/metismenu/css/metisMenu.min.css";
import "../../public/assets/css/pace.min.css";
import "../../public/assets/js/pace.min.js";
import "../../public/assets/css/bootstrap.min.css";
import "../../public/assets/css/bootstrap-extended.css";
import "../../public/assets/css/app.css";
import "../../public/assets/css/icons.css";
import "../../public/assets/css/dark-theme.css";
import "../../public/assets/css/semi-dark.css";
import "../../public/assets/css/header-colors.css";

// js
import "../../public/assets/js/bootstrap.bundle.min.js";
import "../../public/assets/js/jquery.min.js";
import "../../public/assets/plugins/simplebar/js/simplebar.min.js";
import "../../public/assets/plugins/metismenu/js/metisMenu.min.js";
// import "../../public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js";

import { Head } from "@inertiajs/inertia-vue3";
// import { InertiaProgress } from "@inertiajs/progress";
// import PerfectScrollbar from "vue3-perfect-scrollbar";
// import "vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css";
import "vue-select/dist/vue-select.css";
import vSelect from "vue-select";
import "vue-search-select/dist/VueSearchSelect.css";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { Link } from "@inertiajs/inertia-vue3";

import { provide } from "vue";
import { dataPilihan } from "./coba.js";

// InertiaProgress.init({
//     // The delay after which the progress bar will
//     // appear during navigation, in milliseconds.
//     delay: 10,

//     // The color of the progress bar.
//     color: "blue",

//     // Whether to include the default NProgress styles.
//     includeCSS: true,

//     // Whether the NProgress spinner will be shown.
//     showSpinner: true,
// });
createInertiaApp({
    title: (title) => `${title} - SIP.MUBAKID`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head)
            .component("v-select", vSelect)
            .provide("message", {
                dataPilihan,
            })
            .component("Datepicker", Datepicker)
            .component("Link", Link)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

// https://larainfo.com/blogs/how-to-install-inertia-js-in-laravel-8-with-vue-3
