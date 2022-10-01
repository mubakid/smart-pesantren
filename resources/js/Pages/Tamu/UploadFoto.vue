<template>
    <form @submit.prevent="submit">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
            <div class="col-md-6">
                <div class="d-grid mx-3">
                    <Link class="btn btn-secondary" :href="route('home')"
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
            <div class="row mt-5 d-inline-block">
                <div class="col-md">
                    Foto Santri
                    <div class="card" mt-3 style="width: 18rem">
                        <img :src="image" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Foto Santri</h5> -->
                            <input
                                type="file"
                                class="form-control"
                                @input="
                                    form.foto_santri = $event.target.files[0]
                                "
                                @change="showPreview($event)"
                            />
                        </div>
                    </div>
                    Foto Orang Tua
                    <div class="card mb-4" style="width: 18rem">
                        <img :src="image" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <!-- <h5 class="card-title">Foto Santri</h5> -->
                            <input
                                type="file"
                                class="form-control"
                                @input="
                                    form.foto_santri = $event.target.files[0]
                                "
                                @change="showPreview($event)"
                            />
                        </div>
                    </div>
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </form>
</template>
<script setup>
import { reactive, ref } from "vue";
let image = ref("");
const form = reactive({
    foto_santri: "",
});
const showPreview = (e) => {
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length) return;
    image.value = URL.createObjectURL(files[0]);
    console.log(image);
};
</script>
<style>
.foto {
    max-width: 40%;
    height: auto;
}
</style>
