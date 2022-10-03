<template>
    <form @submit.prevent="handleSubmit">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
            <div class="col-md-6">
                <div class="d-grid mx-3">
                    <Link
                        class="btn btn-secondary"
                        :href="route('santri.upload-foto')"
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
            <h4 class="display-7 mt-4">
                Menentukan Pilihan Asrama, Madin, Akademik
            </h4>
            <hr />
            <div class="row mt-5 d-inline-block">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header bg-gray">Pilih Asrama</div>
                        <div class="card-body">
                            <div class="form-group">
                                <v-select
                                    v-model="form.selectedFormal"
                                    :options="formal"
                                    label="name"
                                ></v-select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-gray">Pilih Madin</div>
                        <div class="card-body">
                            <div class="form-group">
                                <v-select
                                    v-model="form.selectedMadin"
                                    :options="madin"
                                    label="name"
                                ></v-select>
                            </div>
                        </div>
                        <div class="card-footer">
                            NB: Madin yang di pilih akan di tes terlebih dahulu
                        </div>
                    </div>
                    <div class="card mb-5">
                        {{ rooms }}
                        <div class="card-header bg-gray">Pilih</div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="form-group my-2">
                                        <label class="mb-2">Daerah</label>
                                        <select
                                            class="form-select"
                                            v-model="form.daerah"
                                        >
                                            <option value="">Pilih</option>
                                            <option
                                                v-for="dor in dormitories"
                                                :key="dor.id"
                                                :value="{
                                                    id: dor.id,
                                                    rooms: dor.rooms,
                                                    name: dor.name,
                                                }"
                                            >
                                                {{ dor.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5" v-if="form.daerah">
                                    <div class="form-group my-2">
                                        <label class="mb-2">Asrama</label>
                                        <select
                                            class="form-select"
                                            v-model="form.asrama"
                                        >
                                            <option value="">Pilih</option>
                                            <option
                                                v-for="n in form.daerah.rooms"
                                            >
                                                {{ n }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2" v-if="form.daerah.name">
                                    <div class="form-group">
                                        <label for="" class="me-2"
                                            >Pilihan</label
                                        >
                                        <span class="btn btn-xl btn-warning">
                                            {{ form.daerah.name + form.asrama }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
        </div>
    </form>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive, defineProps } from "vue";
const props = defineProps({
    formal: Object,
    madin: Object,
    dormitories: Object,
});
const form = reactive({
    daerah: "",
    asrama: "",
    selectedFormal: "",
    selectedMadin: "",
});
const handleSubmit = () => {
    Inertia.post(route("santri.reg-lembaga"), {
        daerah: form.daerah.id,
        asrama: form.asrama,
        madin: form.selectedMadin.id,
        formal: form.selectedFormal.id,
    });
};
</script>
