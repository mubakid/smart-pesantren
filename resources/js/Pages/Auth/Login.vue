<template>
    <Head>
        <title>Masuk</title>
        <meta name="masuk" content="masuk akun SIP Mubakid" />
    </Head>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h1 class="display-6">Login</h1>
                                <p class="text-muted mb-4">Silahkan Masuk</p>
                                <form @submit.prevent="handleSubmit">
                                    <div class="mb-3 text-center">
                                        <input
                                            @keydown.space.prevent
                                            type="text"
                                            placeholder="Email atau Nomor WA"
                                            v-model="form.email"
                                            class="form-control rounded-pill border-0 shadow-sm px-4"
                                            autofocus
                                        />
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input
                                            type="password"
                                            placeholder="Password"
                                            v-model="form.password"
                                            class="mb-2 form-control rounded-pill border-0 shadow-sm px-4 text-success"
                                        />
                                        <small
                                            v-if="
                                                errors.email || errors.password
                                            "
                                            class="text-danger"
                                            >Email / Password salah</small
                                        >
                                    </div>

                                    <div class="d-grid gap-2 mt-2">
                                        <button
                                            type="submit"
                                            class="btn btn-success btn-block text-uppercase mb-2 rounded-pill shadow-sm"
                                        >
                                            Masuk
                                        </button>
                                        <br />
                                        <!-- INI TAMPIL DI MOBILE-->
                                        <div
                                            class="d-block d-sm-none fixed-bottom text-center mb-3"
                                        >
                                            <p>Belum mempunyai akun?</p>

                                            <Link
                                                class="btn btn-outline-success rounded-pill text-uppercase"
                                                as="button"
                                                :href="route('register')"
                                            >
                                                Buat akun
                                            </Link>
                                        </div>
                                        <!-- INI TAMPILAN DESKTOP -->
                                        <div
                                            class="d-none d-sm-block text-center mb-4"
                                        >
                                            <p>Belum mempunyai akun?</p>
                                            <Link
                                                class="btn btn-outline-success rounded-pill btn-block text-uppercase"
                                                as="button"
                                                :href="route('register')"
                                            >
                                                Buat akun
                                            </Link>
                                        </div>
                                    </div>

                                    <div
                                        class="text-center d-flex justify-content-between mt-4"
                                    ></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { reactive } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
const props = defineProps({
    errors: Object,
});
const form = reactive({
    email: "",
    password: "",
});
const handleSubmit = () => {
    Inertia.post(route("login"), form);
};
</script>
<style>
.login,
.image {
    min-height: 100vh;
}

.bg-image {
    background-image: url("https://therichpost.com/wp-content/uploads/2021/02/login-split.jpg");
    background-size: cover;
    background-position: center center;
}
</style>
