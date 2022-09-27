<template>
    <div class="container">
        <div class="row mt-4 text-center">
            <h4>Form Pendaftaran Santri Baru</h4>
        </div>
        <form @submit.prevent="handleSubmit2">
            <div class="row my-4">
                <div class="col-md-6">
                    <small class="text-danger">
                        {{ errors.nama }}
                    </small>
                    <BaseInput
                        v-model="form.nama"
                        type="text"
                        label="nama"
                        placeholder="nama"
                    />
                    <small class="text-danger">
                        {{ errors.nik }}
                    </small>
                    <BaseInput
                        v-model="form.nik"
                        type="number"
                        label="nik"
                        placeholder="nomer KTP / nomer induk kependudukan "
                    />
                    <BaseInput
                        v-model="form.nis"
                        type="text"
                        label="nis"
                        placeholder="nis"
                    />
                    <small class="text-danger">
                        {{ errors.tempat_lahir }}
                    </small>
                    <BaseInput
                        v-model="form.tempat_lahir"
                        type="text"
                        label="tempat_lahir"
                        placeholder="tempat_lahir"
                    />
                    <small class="text-danger">
                        {{ errors.tanggal_lahir }}
                    </small>
                    <BaseInput
                        v-model="form.tanggal_lahir"
                        type="text"
                        label="tanggal_lahir"
                        placeholder="tanggal_lahir"
                    />
                    <small class="text-danger">
                        {{ errors.jenis_kelamin }}
                    </small>
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
                    <small class="text-danger">
                        {{ errors.kota }}
                    </small>
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
                    <div class="form-group mb-2">
                        <label class="text-capitalize">Cita-cita</label>
                        <v-select
                            v-model="form.cita_cita"
                            :options="cita"
                        ></v-select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label class="text-capitalize">Kewarganegaraan</label>
                        <v-select
                            v-model="form.kewarganegaraan"
                            :reduce="(kewarganegaraan) => kewarganegaraan.value"
                            :options="kewarganegaraan"
                        ></v-select>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-capitalize">Kebutuhan Khusus</label>
                        <v-select
                            v-model="form.kebutuhan_khusus"
                            :options="kebutuhan_khusus"
                        ></v-select>
                    </div>
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
                <Link
                    as="button"
                    class="btn btn-secondary me-3"
                    method="post"
                    :href="route('logout')"
                    >Keluar</Link
                >
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
import { Link } from "@inertiajs/inertia-vue3";
import { SelfBuildingSquareSpinner } from "epic-spinners";
import BaseInput from "../../Components/BaseInput.vue";
import { ref, reactive, defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { ModelSelect } from "vue-search-select";

let isSending = ref(false);
const form = reactive({
    jenis_kelamin: "",
    kewarganegaraan: "",
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

let cita = ref([
    "PNS",
    "TNI/Polri",
    "Guru/Dosen",
    "Dokter",
    "Politikus",
    "Wiraswasta",
    "Seniman/Artis",
    "Ilmuwan",
    "Agamawan",
]);
let kebutuhan_khusus = ref([
    "Tidak ada",
    "tuna netra",
    "tuna rungu",
    "tuna daksa",
    "tuna grahita",
    "tuna laras",
    "tuna wicara",
    "bakat istimewa",
    "kesulitan belajar",
]);
let pendidikan = ref([
    "tidak memiliki pendidikan formal",
    "sd/mi/sederajat",
    "smp/mts/sederajat",
    "sma/ma/smk/sederajat",
    "d1",
    "d2",
    "d3",
    "d4/s1",
    "s2",
    "s3",
]);
let pekerjaan = ref([
    "tidak bekerja",
    "buruh (tani/pabrik/bangunan)",
    "dokter/bidan/perawat",
    "guru/dosen",
    "nelayan",
    "pedagang",
    "pegawai swasta",
    "pengacara/hakim/jaksa/notaris",
    "pensiunan",
    "petani/peternak",
    "pilot/pramugari",
    "pns",
    "politikus",
    "seniman/pelukis/artis/sejenis",
    "sopir,masinis,kondektur",
    "tni/polisi",
    "wiraswasta",
    "lainnya",
]);
let penghasilan = ref([
    "tidak berpenghasilan",
    "kurang dari 500.000",
    "500.000 - 1 juta",
    "1 juta - 2 juta",
    "2 juta - 3 juta",
    "3 juta - 4 juta",
    "4 juta - 5 juta",
    "lebih dari 5 juta",
]);

let hub_wali = ref(["Kakek/nenek", "Paman/bibi", "kakak", "lainnya"]);
let kewarganegaraan = ref([
    { value: "WNI", label: "Warga Negara Indonesia" },
    { value: "WNA", label: "Warga Negara Asing" },
]);
</script>
