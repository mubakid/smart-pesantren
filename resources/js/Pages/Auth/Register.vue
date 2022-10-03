<template>
    <Head>
        <title>Buat akun</title>
        <meta name="buat_akun" content="Membuat akun SIP Mubakid" />
    </Head>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h1 class="display-6">Buat Akun</h1>
                                <p class="text-muted mb-4">
                                    Silahkan membuat akun untuk mendaftar
                                </p>
                                <form @submit.prevent="handleSubmit">
                                    <div class="mb-3 text-center">
                                        <input
                                            type="text"
                                            placeholder="Nama lengkap"
                                            v-model="form.name"
                                            class="form-control rounded-pill border-0 shadow-sm px-4"
                                            autofocus
                                        />
                                        <small class="text-danger">{{
                                            errors.name
                                        }}</small>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input
                                            @keydown.space.prevent
                                            @paste.space="remove_on_paste"
                                            type="text"
                                            placeholder="Email atau Nomer Wa"
                                            v-model="form.email"
                                            class="form-control rounded-pill border-0 shadow-sm px-4"
                                            autofocus
                                        />
                                        <small class="text-danger">{{
                                            errors.email
                                        }}</small>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input
                                            type="password"
                                            placeholder="Password"
                                            v-model="form.password"
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-success"
                                        />
                                        <small class="text-danger">{{
                                            errors.password
                                        }}</small>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input
                                            type="password"
                                            placeholder="Ulangi password"
                                            v-model="form.password_confirmation"
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-success"
                                        />
                                    </div>

                                    <div class="d-grid gap-2 mt-2">
                                        <button
                                            type="submit"
                                            class="btn btn-success btn-block text-uppercase mb-2 rounded-pill shadow-sm"
                                        >
                                            Buat Akun
                                        </button>
                                        <br />
                                        <!-- INI TAMPIL DI MOBILE-->
                                        <div
                                            class="d-block d-sm-none fixed-bottom text-center mb-3"
                                        >
                                            <p>Sudah mempunyai akun?</p>

                                            <Link
                                                class="btn btn-outline-success rounded-pill text-uppercase"
                                                as="button"
                                                :href="route('login')"
                                            >
                                                Masuk
                                            </Link>
                                        </div>
                                        <!-- INI TAMPILAN DESKTOP -->
                                        <div
                                            class="d-none d-sm-block text-center mb-4"
                                        >
                                            <p>Sudah mempunyai akun?</p>
                                            <Link
                                                class="btn btn-outline-success rounded-pill btn-block text-uppercase"
                                                as="button"
                                                :href="route('login')"
                                            >
                                                Masuk
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
import { defineProps, reactive } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
const props = defineProps({
    errors: Object,
});
const form = reactive({
    email: "",
    password: "",
});
const handleSubmit = () => {
    Inertia.post(route("register"), form);
};
const remove_on_paste = (event) => {
    let main_text = event.clipboardData.getData("text");

    event.preventDefault();
    this.floatingData.from_id = main_text.trim();
};
</script>

<style>
.login,
.image {
    min-height: 100vh;
}

.bg-image {
    background-image: url("./assets/images/login-header.jpeg");
    background-size: cover;
    background-position: center center;
}
</style>
