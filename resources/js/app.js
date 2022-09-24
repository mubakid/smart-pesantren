import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
// import "mdb-vue-ui-kit/css/mdb.min.css";
import $ from "jquery";

InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 10,

    // The color of the progress bar.
    color: "green",

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: true,
});
createInertiaApp({
    title: (title) => `${title} ~ SIP.MUBAKID`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

// https://larainfo.com/blogs/how-to-install-inertia-js-in-laravel-8-with-vue-3
