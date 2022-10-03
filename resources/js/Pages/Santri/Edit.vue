<template>
    <AppLayout>
        <form @submit.prevent="form.put(santri.update_url)">
            <div class="d-flex justify-content-start align-items-center">
                <BackButton />
                <h4>Edit Data</h4>
            </div>
            <div class="card p-3 table-responsive text-capitalize">
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            <label for="">nama</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.nama"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">nik</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.nik"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">nis</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.nis"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">hp</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.hp"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">tempat_lahir</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.tempat_lahir"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">tanggal_lahir</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.tanggal_lahir"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">jenis_kelamin</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.jenis_kelamin"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">alamat</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.alamat"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">rtrw</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.rtrw"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">desa</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.desa"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kecamatan</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kecamatan"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kota</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kota"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">provinsi</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.provinsi"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kode_pos</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kode_pos"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">agama</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.agama"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">hobi</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.hobi"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">cita_cita</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.cita_cita"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kewarganegaraan</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kewarganegaraan"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kebutuhan_khusus</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kebutuhan_khusus"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">status_rumah</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.status_rumah"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">status_mukim</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.status_mukim"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">sekolah_asal</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.sekolah_asal"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">alamat_sekolah_asal</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.alamat_sekolah_asal"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">npsn_sekolah_asal</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.npsn_sekolah_asal"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">nsm_sekolah_asal</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.nsm_sekolah_asal"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">no_ijazah</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.no_ijazah"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">no_un</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.no_un"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">foto</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.foto"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">foto_wali</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.foto_wali"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">nism</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.nism"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kip</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kip"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">pkh</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.pkh"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kks</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kks"
                            />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">kk</label
                            ><input
                                type="text"
                                class="form-control"
                                v-model="form.kk"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </AppLayout>
</template>
<script setup>
import { defineProps, ref } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
import BackButton from "../../Components/Backbutton.vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
const props = defineProps({
    santri: Object,
});
const form = useForm(props.santri);
</script>
