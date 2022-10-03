<template>
    <Head><title>Pendaftaran</title></Head>
    <AppLayout>
        <!--breadcrumb-->
        <div class="page-breadcrumb d-md-flex align-items-center mb-3">
            <Link
                as="button"
                :href="route('students.edit', $page.props.user.id)"
                class="btn btn-primary mx-1"
                >Edit</Link
            >
            <Link
                as="button"
                :href="route('students.edit', $page.props.user.id)"
                class="btn btn-primary mx-1"
                >Cetak Biodata</Link
            >
            <Link
                as="button"
                :href="route('students.edit', $page.props.user.id)"
                class="btn btn-primary mx-1"
                >Cetak Pernyataan
            </Link>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex flex-column align-items-center text-center"
                                >
                                    <img
                                        v-if="student.foto"
                                        :src="showFoto() + student.foto"
                                        alt="Admin"
                                        class="img-fluid img-thumbnail rounded"
                                    />
                                    <img
                                        v-else
                                        :src="imgUrl"
                                        alt="Admin"
                                        class="rounded-circle p-1 bg-primary"
                                        width="110"
                                    />
                                    <div class="mt-3">
                                        <h4>{{ student.nama }}</h4>
                                        <table
                                            class="table mb-0 table-responsive"
                                        >
                                            <tbody>
                                                <tr v-if="student.dormitory">
                                                    <td>
                                                        {{
                                                            "Daerah: " +
                                                            student.dormitory
                                                                .name +
                                                            "" +
                                                            student.room
                                                        }}
                                                    </td>
                                                </tr>
                                                <tr
                                                    v-if="
                                                        student.madin_education
                                                    "
                                                >
                                                    <td>
                                                        {{
                                                            student
                                                                .madin_education
                                                                .name
                                                        }}
                                                    </td>
                                                </tr>
                                                <tr v-else>
                                                    <td>Madin belum dipilih</td>
                                                </tr>
                                                <tr
                                                    v-if="
                                                        student.formal_education
                                                    "
                                                >
                                                    <td>
                                                        {{
                                                            student
                                                                .formal_education
                                                                .name
                                                        }}
                                                    </td>
                                                </tr>
                                                <tr v-else>
                                                    <td>
                                                        formal belum dipilih
                                                    </td>
                                                </tr>
                                                <tr
                                                    v-if="student.kota"
                                                    class="text-lowercase"
                                                >
                                                    <td>
                                                        {{ student.kota }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card" v-if="student.family">
                            <div class="card-body">
                                <div
                                    class="d-flex flex-column align-items-center text-center"
                                >
                                    <img
                                        :src="imgUrl"
                                        alt="Admin"
                                        class="rounded-circle p-1 bg-primary"
                                        width="110"
                                    />
                                    <div class="mt-3">
                                        <h5>{{ student.family.a_nama }}</h5>
                                        <table
                                            class="table mb-0 table-responsive"
                                        >
                                            <tbody>
                                                <tr
                                                    v-if="
                                                        student.family
                                                            .a_pekerjaan
                                                    "
                                                >
                                                    {{
                                                        student.family
                                                            .a_pekerjaan
                                                    }}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body text-start">
                                <table class="table mb-0 table-striped">
                                    <tbody>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                nama
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.nama }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">nik</th>
                                            <td class="text-capitalize">
                                                {{ student.nik }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">nis</th>
                                            <td class="text-capitalize">
                                                {{ student.nis }}
                                            </td>
                                        </tr>

                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                tempat lahir
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.tempat_lahir }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                tanggal lahir
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.tanggal_lahir }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                jenis kelamin
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.jenis_kelamin }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                alamat
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.alamat }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                rt rw
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.rtrw }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                desa
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.desa }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                kecamatan
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.kecamatan }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                kota
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.kota }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                provinsi
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.provinsi }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                kode pos
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.kode_pos }}
                                            </td>
                                        </tr>

                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                agama
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.agama }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                hobi
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.hobi }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                cita-cita
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.cita_cita }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                kewarganegaraan
                                            </th>
                                            <td>
                                                {{ student.kewarganegaraan }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                kebutuhan khusus
                                            </th>
                                            <td>
                                                {{ student.kebutuhan_khusus }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                status rumah
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.status_rumah }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                status mukim
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.status_mukim }}
                                            </td>
                                        </tr>

                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                sekolah asal
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.sekolah_asal }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                alamat sekolah_asal
                                            </th>
                                            <td>
                                                {{
                                                    student.alamat_sekolah_asal
                                                }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                npsn sekolah_asal
                                            </th>
                                            <td>
                                                {{ student.npsn_sekolah_asal }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                nsm sekolah_asal
                                            </th>
                                            <td>
                                                {{ student.nsm_sekolah_asal }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                no ijazah
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.no_ijazah }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                no Ujian Nasional
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.no_un }}
                                            </td>
                                        </tr>

                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">
                                                nism
                                            </th>
                                            <td class="text-capitalize">
                                                {{ student.nism }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">kip</th>
                                            <td class="text-capitalize">
                                                {{ student.kip }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">pkh</th>
                                            <td class="text-capitalize">
                                                {{ student.pkh }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">kks</th>
                                            <td class="text-capitalize">
                                                {{ student.kks }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th class="text-capitalize">kk</th>
                                            <td class="text-capitalize">
                                                {{ student.kk }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-start">
                                <table class="table mb-0 table-striped">
                                    <tbody>
                                        <tr class="text-capitalize">
                                            <th>nik ayah</th>
                                            <td>{{ student.family.a_nik }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>nama ayah</th>
                                            <td>{{ student.family.a_nama }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>pekerjaan ayah</th>
                                            <td>
                                                {{ student.family.a_pekerjaan }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>pendidikan ayah</th>
                                            <td>
                                                {{
                                                    student.family.a_pendidikan
                                                }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>hp ayah</th>
                                            <td>
                                                {{ student.family.a_phone }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>penghasilan ayah</th>
                                            <td>
                                                {{
                                                    student.family.a_penghasilan
                                                }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>nik ibu</th>
                                            <td>{{ student.family.i_nik }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>nama ibu</th>
                                            <td>{{ student.family.i_nama }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>pekerjaan ibu</th>
                                            <td>
                                                {{ student.family.i_pekerjaan }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>pendidikan ibu</th>
                                            <td>
                                                {{
                                                    student.family.i_pendidikan
                                                }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>phone ibu</th>
                                            <td>
                                                {{ student.family.i_phone }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>hubungan_wali wali</th>
                                            <td>
                                                {{
                                                    student.family
                                                        .w_hubungan_wali
                                                }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>nik wali</th>
                                            <td>{{ student.family.w_nik }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>nama wali</th>
                                            <td>{{ student.family.w_nama }}</td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>pekerjaan wali</th>
                                            <td>
                                                {{ student.family.w_pekerjaan }}
                                            </td>
                                        </tr>
                                        <tr class="text-capitalize">
                                            <th>penghasilan wali</th>
                                            <td>
                                                {{
                                                    student.family.w_penghasilan
                                                }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import { defineProps } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
defineProps({
    student: Object,
});
const imgUrl = new URL(
    "../../../../public/assets/user-profile.png",
    import.meta.url
);
const showFoto = () => {
    return "/storage/foto_santri/";
};
</script>
