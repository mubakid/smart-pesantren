<template>
    <div class="container">
        <div class="row mt-4 text-center">
            <h4 @click="getProvinsi">Form Pendaftaran Santri Baru</h4>
            <hr />
        </div>
        <form @submit.prevent="handleSubmit2">
            {{ errors }}
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
                    <BaseInput
                        v-model="form.a_kk"
                        type="number"
                        label="Nomor KK (Kartu keluarga)"
                        placeholder="Nomor KK"
                    />
                    <small class="text-danger">
                        {{ errors.nik }}
                    </small>
                    <BaseInput
                        v-model="form.nik"
                        type="number"
                        label="Nomer KTP / NIK"
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
                        label="tempat lahir"
                        placeholder="tempat_lahir"
                    />
                    <small class="text-danger">
                        {{ errors.tanggal_lahir }}
                    </small>
                    <div class="form-group mb-3">
                        <label>Tanggal lahir</label>
                        <Datepicker v-model="form.tanggal_lahir" />
                    </div>
                    <small class="text-danger">
                        {{ errors.jenis_kelamin }}
                    </small>
                    <div class="form-group mb-3">
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

                    <div class="form-group mb-3">
                        <label>Provinsi</label>
                        <select
                            class="form-select"
                            @change="onProv"
                            v-model="selected_provinsi"
                        >
                            <option selected disabled>Pilih Provinsi</option>
                            <option
                                v-for="(prov, index) in provinsi"
                                :key="prov.id"
                                :value="{ id: prov.id, text: prov.name }"
                            >
                                {{ prov.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-3" v-if="kota">
                        <label>Kota/Kabupaten</label>
                        <select
                            class="form-select"
                            @change="onKota"
                            v-model="selected_kota"
                        >
                            <option selected disabled>Pilih Kota/Kab</option>
                            <option
                                v-for="(kota, index) in kota"
                                :key="kota.id"
                                :value="{ id: kota.id, text: kota.name }"
                            >
                                {{ kota.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-3" v-if="kecamatan">
                        <label>Kecamatan</label>
                        <select
                            class="form-select"
                            @change="onKecamatan"
                            v-model="selected_kecamatan"
                        >
                            <option selected disabled>Pilih Kecamatan</option>
                            <option
                                v-for="(kecamatan, index) in kecamatan"
                                :key="kecamatan.id"
                                :value="{
                                    id: kecamatan.id,
                                    text: kecamatan.name,
                                }"
                            >
                                {{ kecamatan.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-3" v-if="desa">
                        <label>Desa/Kelurahan</label>
                        <select v-model="selected_desa" class="form-select">
                            <option selected disabled>
                                Pilih Desa/Kelurahan
                            </option>
                            <option
                                v-for="(desa, index) in desa"
                                :key="desa.id"
                                :value="{ id: desa.id, text: desa.name }"
                            >
                                {{ desa.name }}
                            </option>
                        </select>
                    </div>

                    <BaseInput
                        v-model="form.kode_pos"
                        type="number"
                        label="kode_pos"
                        placeholder="kode_pos"
                    />
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Agama</label>
                        <v-select
                            v-model="form.agama"
                            :options="['Islam']"
                        ></v-select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Hobi</label>
                        <v-select
                            taggable
                            v-model="form.hobi"
                            :options="hobi"
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Cita-cita</label>
                        <v-select
                            v-model="form.cita_cita"
                            :options="cita"
                            taggable
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Kewarganegaraan</label>
                        <v-select
                            v-model="form.kewarganegaraan"
                            :reduce="(kewarganegaraan) => kewarganegaraan.value"
                            :options="kewarganegaraan"
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Kebutuhan Khusus</label>
                        <v-select
                            v-model="form.kebutuhan_khusus"
                            :options="kebutuhan_khusus"
                            taggable
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Status rumah</label>
                        <v-select
                            v-model="form.status_rumah"
                            :options="status_rumah"
                            taggable
                        ></v-select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-capitalize">Status mukim</label>
                        <v-select
                            v-model="form.status_mukim"
                            :options="['Ya', 'Tidak']"
                        ></v-select>
                    </div>
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
            <h4 class="text-center mt-4">
                <span
                    class="btn btn-block btn-secondary"
                    @click="addFamilyHandle"
                    >+ Tambah Data Orang tua</span
                >
            </h4>
            <hr />
            <div class="row my-4" v-if="family">
                <div class="col-md-6">
                    <BaseInput
                        v-model="form.a_nik"
                        type="text"
                        label="No Ktp/Nik Ayah"
                        placeholder="No Ktp/Nik Ayah"
                    />
                    <BaseInput
                        v-model="form.a_nama"
                        type="number"
                        label="Nama Ayah"
                        placeholder="Nama Ayah"
                    />
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Pekerjaan Ayah</label>
                        <v-select
                            v-model="form.a_pekerjaan"
                            :options="pekerjaan"
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Pendidikan Ayah</label>
                        <v-select
                            v-model="form.a_pendidikan"
                            :options="pendidikan"
                        ></v-select>
                    </div>
                    <BaseInput
                        v-model="form.a_phone"
                        type="number"
                        label="Nomor Hp/Wa Ayah"
                        placeholder="085xxxx"
                    />
                    <BaseInput
                        v-model="form.a_penghasilan"
                        type="text"
                        label="a_penghasilan"
                        placeholder="a_penghasilan"
                    />
                </div>
                <div class="col-md-6">
                    <BaseInput
                        v-model="form.i_nik"
                        type="number"
                        label="No Ktp/Nik Ibu"
                        placeholder="No Ktp/Nik Ibu"
                    />
                    <BaseInput
                        v-model="form.i_nama"
                        type="text"
                        label="i_nama"
                        placeholder="i_nama"
                    />
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Pekerjaan Ibu</label>
                        <v-select
                            v-model="form.i_pekerjaan"
                            :options="pekerjaan"
                        ></v-select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-capitalize">Pendidikan Ibu</label>
                        <v-select
                            v-model="form.i_pendidikan"
                            :options="pendidikan"
                        ></v-select>
                    </div>
                    <BaseInput
                        v-model="form.i_phone"
                        type="number"
                        label="Nomor Hp/Wa Ibu"
                        placeholder="085xxxx"
                    />
                </div>
            </div>
            <h4 class="text-center mt-4">
                <span class="btn btn-block btn-secondary" @click="addWaliHandle"
                    >+ Tambah Data Wali</span
                >
            </h4>
            <hr />
            <div class="row my-4" v-if="wali">
                <div class="col-md-6">
                    <BaseInput
                        v-model="form.w_hubungan_wali"
                        type="text"
                        label="w_hubungan_wali"
                        placeholder="w_hubungan_wali"
                    />
                    <BaseInput
                        v-model="form.w_nik"
                        type="text"
                        label="w_nik"
                        placeholder="w_nik"
                    />
                    <BaseInput
                        v-model="form.w_nama"
                        type="text"
                        label="w_nama"
                        placeholder="w_nama"
                    />
                    <BaseInput
                        v-model="form.w_pekerjaan"
                        type="text"
                        label="w_pekerjaan"
                        placeholder="w_pekerjaan"
                    />
                    <BaseInput
                        v-model="form.w_penghasilan"
                        type="text"
                        label="w_penghasilan"
                        placeholder="w_penghasilan"
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
import { ref, reactive, defineProps, onMounted, onUpdated } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { ModelSelect } from "vue-search-select";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";

let isSending = ref(false);
let family = ref(false);
let wali = ref(false);
let provinsi = ref([]);
let selected_provinsi = ref("");
let kota = ref([]);
let selected_kota = ref("");
let kecamatan = ref([]);
let selected_kecamatan = ref("");
let desa = ref([]);
let selected_desa = ref("");

onMounted(() => {
    fetch(`https://cakmalik.github.io/api-wilayah-indonesia/api/provinces.json`)
        .then((response) => response.json())
        .then((provinces) => (provinsi.value = provinces));
});

const onProv = () => {
    fetch(
        `https://cakmalik.github.io/api-wilayah-indonesia/api/regencies/${selected_provinsi.value.id}.json`
    )
        .then((response) => response.json())
        .then((regencies) => (kota.value = regencies));
};
const onKota = () => {
    fetch(
        `https://cakmalik.github.io/api-wilayah-indonesia/api/districts/${selected_kota.value.id}.json`
    )
        .then((response) => response.json())
        .then((districts) => (kecamatan.value = districts));
};
const onKecamatan = () => {
    fetch(
        `https://cakmalik.github.io/api-wilayah-indonesia/api/villages/${selected_kecamatan.value.id}.json`
    )
        .then((response) => response.json())
        .then((villages) => (desa.value = villages));
};
const form = reactive({
    jenis_kelamin: "",
    kewarganegaraan: "WNI",
    agama: "Islam",
    kebutuhan_khusus: "Tidak ada",
    status_rumah: "tinggal dengan orang tua/wali",
    status_mukim: "Ya",
    kota: "ss",
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
const addFamilyHandle = () => {
    family.value = !family.value;
};
const addWaliHandle = () => {
    wali.value = !wali.value;
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
let status_rumah = ref([
    "tinggal dengan orang tua/wali",
    "ikut saudara/kerabat",
    "kontrak/kost",
    "rumah singgah",
    "panti asuhan",
    "asrama bukan milik lembaga",
    "lainnya",
]);
let kewarganegaraan = ref([
    { value: "WNI", label: "Warga Negara Indonesia" },
    { value: "WNA", label: "Warga Negara Asing" },
]);
let hobi = ref([
    "olahraga",
    "kesenian",
    "membaca",
    "menulis",
    "jalan-jalan",
    "lainnya",
]);
</script>
