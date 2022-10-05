<template>
    <AppLayout>
        <div class="col">
            <div class="d-flex justify-content-start align-items-center">
                <BackButton />
                <h6 class="mb-0 text-uppercase">Edit Data</h6>
                <hr />
            </div>
            <Alert />
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link active"
                                data-bs-toggle="tab"
                                href="#foto"
                                role="tab"
                                aria-selected="true"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i class="bx bx-home font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Foto</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                data-bs-toggle="tab"
                                href="#data_ribadi"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-user-pin font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">Pribadi</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                data-bs-toggle="tab"
                                href="#orang_tua"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i
                                            class="bx bx-microphone font-18 me-1"
                                        ></i>
                                    </div>
                                    <div class="tab-title">Wali</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                data-bs-toggle="tab"
                                href="#pendidikan"
                                role="tab"
                                aria-selected="false"
                            >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon">
                                        <i class="bx bx-home font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Pendidikan</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div
                            class="tab-pane fade show active"
                            id="foto"
                            role="tabpanel"
                        >
                            <form @submit.prevent="handleSubmitFoto">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-column align-items-center text-center"
                                                >
                                                    <label class="mb-2"
                                                        >Foto Santri</label
                                                    >
                                                    <img
                                                        :src="
                                                            image
                                                                ? image
                                                                : props.santri
                                                                      .foto
                                                                ? urlStorage +
                                                                  'foto_santri/' +
                                                                  props.santri
                                                                      .foto
                                                                : defaultImg
                                                        "
                                                        alt="Admin"
                                                        class="p-1 bg-primary img-thumbnail"
                                                    />
                                                    <hr />

                                                    <input
                                                        type="file"
                                                        class="form-control"
                                                        :class="{
                                                            'is-invalid':
                                                                errors.nama,
                                                        }"
                                                        ref="foto_santri"
                                                        @input="
                                                            formFoto.santri =
                                                                $event.target.files[0]
                                                        "
                                                        @change="
                                                            showPreview($event)
                                                        "
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-column align-items-center text-center"
                                                >
                                                    <label class="mb-2"
                                                        >Foto Wali</label
                                                    >
                                                    <img
                                                        :src="
                                                            imageWali
                                                                ? imageWali
                                                                : props.santri
                                                                      .foto_wali
                                                                ? urlStorage +
                                                                  'foto_wali/' +
                                                                  props.santri
                                                                      .foto_wali
                                                                : defaultImg
                                                        "
                                                        alt="Admin"
                                                        class="p-1 bg-primary img-thumbnail"
                                                    />
                                                    <hr />

                                                    <input
                                                        type="file"
                                                        class="form-control"
                                                        :class="{
                                                            'is-invalid':
                                                                errors.nama,
                                                        }"
                                                        ref="foto_santri"
                                                        @input="
                                                            formFoto.wali =
                                                                $event.target.files[0]
                                                        "
                                                        @change="
                                                            showPreviewWali(
                                                                $event
                                                            )
                                                        "
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-primary radius-30"
                                >
                                    Update Foto
                                </button>
                            </form>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="data_ribadi"
                            role="tabpanel"
                        >
                            <form @submit.prevent="handleSubmitPribadi">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">nama</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.nama,
                                                }"
                                                v-model="form.nama"
                                            />
                                            <div class="invalid-feedback">
                                                {{ errors.nama }}
                                            </div>
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">nik</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.nik,
                                                }"
                                                v-model="form.nik"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">nis</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.nis,
                                                }"
                                                v-model="form.nis"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">hp</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.hp,
                                                }"
                                                v-model="form.hp"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">tempat_lahir</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.tempat_lahir,
                                                }"
                                                v-model="form.tempat_lahir"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">tanggal lahir</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.tanggal_lahir,
                                                }"
                                                v-model="form.tanggal_lahir"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">jenis kelamin</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.jenis_kelamin,
                                                }"
                                                v-model="form.jenis_kelamin"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">alamat</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.alamat,
                                                }"
                                                v-model="form.alamat"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">rt rw</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.rtrw,
                                                }"
                                                v-model="form.rtrw"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">desa</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.desa,
                                                }"
                                                v-model="form.desa"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kecamatan</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.kecamatan,
                                                }"
                                                v-model="form.kecamatan"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kota</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.kota,
                                                }"
                                                v-model="form.kota"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">provinsi</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.provinsi,
                                                }"
                                                v-model="form.provinsi"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kode pos</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.kode_pos,
                                                }"
                                                v-model="form.kode_pos"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">agama</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.agama,
                                                }"
                                                v-model="form.agama"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">hobi</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.hobi,
                                                }"
                                                v-model="form.hobi"
                                            />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">cita-cita</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.cita_cita,
                                                }"
                                                v-model="form.cita_cita"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kewarganegaraan</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.kewarganegaraan,
                                                }"
                                                v-model="form.kewarganegaraan"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for=""
                                                >kebutuhan khusus</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.kebutuhan_khusus,
                                                }"
                                                v-model="form.kebutuhan_khusus"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">status rumah</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.status_rumah,
                                                }"
                                                v-model="form.status_rumah"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">status mukim</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.status_mukim,
                                                }"
                                                v-model="form.status_mukim"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">sekolah asal</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.sekolah_asal,
                                                }"
                                                v-model="form.sekolah_asal"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for=""
                                                >alamat sekolah asal</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.alamat_sekolah_asal,
                                                }"
                                                v-model="
                                                    form.alamat_sekolah_asal
                                                "
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for=""
                                                >npsn sekolah asal</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.npsn_sekolah_asal,
                                                }"
                                                v-model="form.npsn_sekolah_asal"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for=""
                                                >nsm sekolah asal</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.nsm_sekolah_asal,
                                                }"
                                                v-model="form.nsm_sekolah_asal"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">no ijazah</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.no_ijazah,
                                                }"
                                                v-model="form.no_ijazah"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for=""
                                                >no ujian nasional</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.no_un,
                                                }"
                                                v-model="form.no_un"
                                            />
                                        </div>

                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">nism</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.nism,
                                                }"
                                                v-model="form.nism"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kip</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.kip,
                                                }"
                                                v-model="form.kip"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">pkh</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.pkh,
                                                }"
                                                v-model="form.pkh"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">kks</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.kks,
                                                }"
                                                v-model="form.kks"
                                            />
                                        </div>
                                        <div
                                            class="form-group mb-2 text-capitalize"
                                        >
                                            <label for="">nomor kk</label
                                            ><input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.kk,
                                                }"
                                                v-model="form.kk"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-primary radius-30 mt-4"
                                >
                                    Update Data Pribadi
                                </button>
                            </form>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="orang_tua"
                            role="tabpanel"
                        >
                            <form @submit.prevent="handleSubmitOrtu">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nik ayah</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.a_nik,
                                                }"
                                                v-model="formOrtu.a_nik"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nama ayah</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.a_nama,
                                                }"
                                                v-model="formOrtu.a_nama"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">pekerjaan ayah</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.a_pekerjaan,
                                                }"
                                                v-model="formOrtu.a_pekerjaan"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for=""
                                                >pendidikan ayah</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.a_pendidikan,
                                                }"
                                                v-model="formOrtu.a_pendidikan"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">phone ayah</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.a_phone,
                                                }"
                                                v-model="formOrtu.a_phone"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for=""
                                                >penghasilan ayah</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.a_penghasilan,
                                                }"
                                                v-model="formOrtu.a_penghasilan"
                                            />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nik ibu</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.i_nik,
                                                }"
                                                v-model="formOrtu.i_nik"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nama ibu</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.i_nama,
                                                }"
                                                v-model="formOrtu.i_nama"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">pekerjaan ibu</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.i_pekerjaan,
                                                }"
                                                v-model="formOrtu.i_pekerjaan"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">pendidikan ibu</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.i_pendidikan,
                                                }"
                                                v-model="formOrtu.i_pendidikan"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">phone ibu</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.i_phone,
                                                }"
                                                v-model="formOrtu.i_phone"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">hubungan wali</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.w_hubungan_wali,
                                                }"
                                                v-model="
                                                    formOrtu.w_hubungan_wali
                                                "
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nik wali</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.w_nik,
                                                }"
                                                v-model="formOrtu.w_nik"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">nama wali</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid': errors.w_nama,
                                                }"
                                                v-model="formOrtu.w_nama"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for="">pekerjaan wali</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.w_pekerjaan,
                                                }"
                                                v-model="formOrtu.w_pekerjaan"
                                            />
                                        </div>
                                        <div
                                            class="form-group my-3 text-capitalize"
                                        >
                                            <label for=""
                                                >penghasilan wali</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                :class="{
                                                    'is-invalid':
                                                        errors.w_penghasilan,
                                                }"
                                                v-model="formOrtu.w_penghasilan"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn radius-30 btn-primary"
                                >
                                    Update data orang tua
                                </button>
                            </form>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="pendidikan"
                            role="tabpanel"
                        >
                            <form @submit="handleSubmitPendidikan">
                                <div class="form-group mb-3">
                                    <label>Daerah</label>
                                    <v-select
                                        label="name"
                                        v-model="selectedDaerah"
                                        :reduce="(pendidikan) => pendidikan.id"
                                        :options="formPendidikan.daerah"
                                    />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Madin</label>
                                    <v-select
                                        label="name"
                                        v-model="selectedMadin"
                                        :reduce="(pendidikan) => pendidikan.id"
                                        :options="formPendidikan.madin"
                                    />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Formal</label>
                                    <v-select
                                        label="name"
                                        v-model="selectedFormal"
                                        :reduce="(pendidikan) => pendidikan.id"
                                        :options="formPendidikan.formal"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import { defineProps, ref, reactive } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
import BackButton from "../../Components/Backbutton.vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import Alert from "../../Components/Alert.vue";
let selectedMadin = ref(props.santri.madin_education_id);
let selectedFormal = ref(props.santri.formal_education_id);
let selectedDaerah = ref(props.santri.dormitory_id);
let image = ref("");
let imageWali = ref("");
const props = defineProps({
    errors: Object,
    santri: Object,
    family: Object,
    madin: Object,
    formal: Object,
    daerah: Object,
});
const form = useForm(props.santri);
const formOrtu = useForm(props.family);

const formPendidikan = useForm({
    madin: props.madin,
    formal: props.formal,
    daerah: props.daerah,
});

const urlStorage = new URL("../../../../public/storage/", import.meta.url);
const defaultImg = new URL(
    "../../../../public/assets/user-profile.png",
    import.meta.url
);
const handleSubmitPribadi = () => {
    form.put(route("admin.santri.update", props.santri));
};
const handleSubmitOrtu = () => {
    formOrtu.put(route("admin.santri.update-ortu", props.santri.id));
};

const handleSubmitPendidikan = () => {};

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
const handleSubmitFoto = () => {
    Inertia.post(route("admin.santri.update-foto", props.santri.id), formFoto);
};
const formFoto = reactive({
    santri: "",
    wali: "",
});
</script>
