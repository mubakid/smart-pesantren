<template>
    <Head><title>Pendaftaran</title></Head>
    <nav
        class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom"
    ></nav>
    <div class="container text-center">
        <div class="pricing-table mt-4">
            <h6 class="mb-0 text-uppercase">Pilih Metode Pembayaran</h6>
            <hr />
            <br />
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-danger py-3">
                            <h5
                                class="card-title text-white text-uppercase text-center"
                            >
                                Langsung
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid">
                                Membayar langsung ke pengurus Bagian
                                administrasi di Pesantren Mubakid
                                <Link
                                    as="button"
                                    :href="route('home')"
                                    class="btn btn-danger my-2 radius-30 mt-3"
                                    >Pilih</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-primary py-3">
                            <h5
                                class="card-title text-white text-uppercase text-center"
                            >
                                Basmalah
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid">
                                Membayar dengan cara datang ke Toko Basmalah
                                terdekat, dengan menyerahkan Nomor Induk Santri
                                (NIS)
                                <Link
                                    as="button"
                                    :href="route('home')"
                                    class="btn btn-primary my-2 radius-30 mt-3"
                                    >Pilih</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-warning py-3">
                            <h5
                                class="card-title text-dark text-uppercase text-center"
                            >
                                Virtual
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid">
                                Membayar menggunakan Virtual Account, bisa
                                menggunakan Mobile banking atau transfer
                                langsung ke nomor Virtual Account
                                <Link
                                    as="button"
                                    :href="route('home')"
                                    class="btn btn-warning my-2 radius-30"
                                    >Pilih</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
