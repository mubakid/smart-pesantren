<template>
    <div class="container">
        <div class="row mt-4 text-center">
            <h4>Form Pendaftaran Santri Baru</h4>
        </div>
        <form @submit.prevent="handleSubmit2">
            <div class="row my-4">
                <div class="col-md-6">
                    <BaseInput
                        v-model="form.nama"
                        type="text"
                        label="nama"
                        placeholder="nama"
                    />
                    {{ errors.nama }}
                    <BaseInput
                        v-model="form.nik"
                        type="text"
                        label="nik"
                        placeholder="nik"
                    />
                    <BaseInput
                        v-model="form.nis"
                        type="text"
                        label="nis"
                        placeholder="nis"
                    />
                    <BaseInput
                        v-model="form.tempat_lahir"
                        type="text"
                        label="tempat_lahir"
                        placeholder="tempat_lahir"
                    />
                    <BaseInput
                        v-model="form.tanggal_lahir"
                        type="text"
                        label="tanggal_lahir"
                        placeholder="tanggal_lahir"
                    />
                    <div class="form-group mb-2">
                        <label for="jk">Jenis_kelamin</label>
                        <select
                            v-model="form.jenis_kelamin"
                            class="form-select"
                        >
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-laki</option>
                        </select>
                    </div>
                    <BaseInput
                        v-model="form.alamat"
                        type="text"
                        label="alamat"
                        placeholder="alamat"
                    />
                    <BaseInput
                        v-model="form.rtrw"
                        type="text"
                        label="rtrw"
                        placeholder="rtrw"
                    />
                    <BaseInput
                        v-model="form.desa"
                        type="text"
                        label="desa"
                        placeholder="desa"
                    />
                    <BaseInput
                        v-model="form.kecamatan"
                        type="text"
                        label="kecamatan"
                        placeholder="kecamatan"
                    />
                    <BaseInput
                        v-model="form.kota"
                        type="text"
                        label="kota"
                        placeholder="kota"
                    />
                    <BaseInput
                        v-model="form.provinsi"
                        type="text"
                        label="provinsi"
                        placeholder="provinsi"
                    />
                    <BaseInput
                        v-model="form.kode_pos"
                        type="number"
                        label="kode_pos"
                        placeholder="kode_pos"
                    />
                    <BaseInput
                        v-model="form.agama"
                        type="text"
                        label="agama"
                        placeholder="agama"
                    />
                    <BaseInput
                        v-model="form.hobi"
                        type="text"
                        label="hobi"
                        placeholder="hobi"
                    />
                    <BaseInput
                        v-model="form.cita_cita"
                        type="text"
                        label="cita_cita"
                        placeholder="cita_cita"
                    />
                </div>
                <div class="col-md-6">
                    <BaseInput
                        v-model="form.kewarganegaraan"
                        type="text"
                        label="kewarganegaraan"
                        placeholder="kewarganegaraan"
                    />
                    <BaseInput
                        v-model="form.kebutuhan_khusus"
                        type="text"
                        label="kebutuhan_khusus"
                        placeholder="kebutuhan_khusus"
                    />
                    <BaseInput
                        v-model="form.status_rumah"
                        type="text"
                        label="status_rumah"
                        placeholder="status_rumah"
                    />
                    <BaseInput
                        v-model="form.status_mukim"
                        type="text"
                        label="status_mukim"
                        placeholder="status_mukim"
                    />
                    <BaseInput
                        v-model="form.sekolah_asal"
                        type="text"
                        label="sekolah_asal"
                        placeholder="sekolah_asal"
                    />
                    <BaseInput
                        v-model="form.alamat_sekolah_asal"
                        type="text"
                        label="alamat_sekolah_asal"
                        placeholder="alamat_sekolah_asal"
                    />
                    <BaseInput
                        v-model="form.npsn_sekolah_asal"
                        type="text"
                        label="npsn_sekolah_asal"
                        placeholder="npsn_sekolah_asal"
                    />
                    <BaseInput
                        v-model="form.nsm_sekolah_asal"
                        type="text"
                        label="nsm_sekolah_asal"
                        placeholder="nsm_sekolah_asal"
                    />
                    <BaseInput
                        v-model="form.no_ijazah"
                        type="text"
                        label="no_ijazah"
                        placeholder="no_ijazah"
                    />
                    <BaseInput
                        v-model="form.no_un"
                        type="text"
                        label="no_un"
                        placeholder="no_un"
                    />
                    <BaseInput
                        v-model="form.foto"
                        type="text"
                        label="foto"
                        placeholder="foto"
                    />
                    <BaseInput
                        v-model="form.foto_wali"
                        type="text"
                        label="foto_wali"
                        placeholder="foto_wali"
                    />
                    <BaseInput
                        v-model="form.nism"
                        type="text"
                        label="nism"
                        placeholder="nism"
                    />
                    <BaseInput
                        v-model="form.kip"
                        type="text"
                        label="kip"
                        placeholder="kip"
                    />
                    <BaseInput
                        v-model="form.pkh"
                        type="text"
                        label="pkh"
                        placeholder="pkh"
                    />
                    <BaseInput
                        v-model="form.kks"
                        type="text"
                        label="kks"
                        placeholder="kks"
                    />
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center mb-3">
                <button
                    type="submit"
                    class="btn btn-success me-2"
                    :disabled="isSending"
                >
                    Kirim Formulir
                </button>
                <SelfBuildingSquareSpinner
                    v-if="isSending"
                    :animation-duration="2000"
                    :size="25"
                    :color="'gray'"
                />
            </div>
        </form>
    </div>
</template>
<script setup>
import { SelfBuildingSquareSpinner } from "epic-spinners";
import BaseInput from "../../Components/BaseInput.vue";
import { ref, reactive, defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";
let isSending = ref(false);
// const firstName = ref("");
// const lastName = ref("");
const form = reactive({
    jenis_kelamin: "",
});

const props = defineProps({
    errors: Object,
});
const handleSubmit2 = () => {
    isSending.value = true;
    Inertia.post(route("students.store"), form);
    setTimeout(() => {
        isSending.value = false;
    }, 3000);
};
</script>
