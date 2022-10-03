<template>
    <form @submit.prevent="handleSubmit">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
            <div class="col-md-6">
                <div class="d-grid mx-3">
                    <Link
                        class="btn btn-secondary"
                        :href="route('santri.pilih-metode-pembayaran')"
                        >Lewati</Link
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-grid mx-3">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </nav>
        <div class="container text-center">
            <h4 class="display-7 mt-4">Upload foto</h4>
            <hr />
            <div class="row align-items-center mb-4">
                <div class="d-md-flex justify-content-center">
                    <div class="col mx-3">
                        <p class="text-uppercase">Foto Santri</p>
                        <div class="card">
                            <img :src="image ?? 'sss'" class="card-img-top" />
                            <div class="card-body">
                                <!-- <h5 class="card-title">Foto Santri</h5> -->
                                <input
                                    type="file"
                                    class="form-control"
                                    ref="foto_santri"
                                    @input="
                                        form.foto_santri =
                                            $event.target.files[0]
                                    "
                                    @change="showPreview($event)"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col mx-3">
                        <p class="text-uppercase">Foto Orang Tua</p>
                        <div class="card mb-4">
                            <img
                                :src="imageWali ?? 'sss'"
                                class="card-img-top"
                            />
                            <div class="card-body">
                                <!-- <h5 class="card-title">Foto Santri</h5> -->
                                <input
                                    type="file"
                                    class="form-control"
                                    ref="foto_wali"
                                    @input="
                                        form.foto_wali = $event.target.files[0]
                                    "
                                    @change="showPreviewWali($event)"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref } from "vue";
let image = ref("");
let imageWali = ref("");
const form = reactive({
    foto_santri: "",
    foto_wali: "",
});
const showPreview = (e) => {
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length) return;
    image.value = URL.createObjectURL(files[0]);
};
const showPreviewWali = (e) => {
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length) return;
    imageWali.value = URL.createObjectURL(files[0]);
};

const handleSubmit = () => {
    Inertia.post(route("santri.store-foto"), form);
};
</script>
<style>
.foto {
    max-width: 40%;
    height: auto;
}
</style>
