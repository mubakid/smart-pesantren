<template>
    <AppLayout>
        <Alert />
        <SweetAlert />
        <!-- <button @click="alertDisplay()"></button> -->
        <div class="card p-1 text-capitalize">
            <div class="row">
                <div class="col my-1">
                    <v-select :options="['daerah']" placeholder="Daerah" />
                </div>
                <div class="col my-1">
                    <v-select :options="['madin']" placeholder="Madin" />
                </div>
                <div class="col my-1">
                    <v-select :options="['formal']" placeholder="Formal" />
                </div>
                <div class="col my-1">
                    <v-select :options="['tahun']" placeholder="Tahun" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-md-flex justify-content-between">
                <div class="mb-2">
                    <select
                        class="form-select-sm"
                        v-model="perPage"
                        @change="getTags"
                    >
                        <option value="5">5</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <input
                        @input="debounceSearch"
                        type="text"
                        class="form-control-sm ms-2"
                        placeholder="Cari nama..."
                        autofocus
                    />
                    <small class="ms-2">{{ typing }}</small>
                    <!-- <input
                        v-model="search"
                        type="text"
                        class="form-control-sm ms-2"
                        placeholder="Cari nama..."
                        autofocus
                    /> -->
                </div>
                <div class="dropdown">
                    <button
                        class="btn btn-sm btn-primary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Download
                    </button>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a class="dropdown-item" href="#">Pdf</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Excel</a>
                        </li>
                        <!-- <li>
                            <a class="dropdown-item" href="#"
                                >Something else here</a
                            >
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="card p-3 table-responsive">
            <table class="table table-striped">
                <thead class="table-success">
                    <tr class="text-capitalize">
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Jk</th>
                        <th>Usia</th>
                        <th>daerah</th>
                        <th>madin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="s in students.data" :key="s.id">
                        <td>{{ s.nama }}</td>
                        <td>{{ s.nis }}</td>
                        <td>{{ s.jenis_kelamin }}</td>
                        <td></td>
                        <td>daerah</td>
                        <td>madin</td>
                        <td>
                            <div class="btn-group">
                                <Link
                                    as="button"
                                    class="btn btn-outline-primary btn-sm"
                                    :href="route('admin.santri.edit', s.id)"
                                >
                                    Edit
                                </Link>
                                <button
                                    type="button"
                                    class="btn btn-outline-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <span class="visually-hidden"
                                        >Toggle Dropdown</span
                                    >
                                </button>
                                <ul class="dropdown-menu" style="">
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Show</a
                                        >
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >MoU</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >KTS</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >K.Mahrom</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Biodata</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <tr>
                <div class="d-md-flex justify-content-end">
                    <template v-for="(link, key) in students.links" :key="key">
                        <div class="" v-if="link.url === null"></div>
                        <Link
                            v-else
                            :href="link.url"
                            v-html="link.label"
                            class="btn btn-sm btn-outline-secondary mx-1 my-1"
                            :class="{ 'btn-primary': link.active }"
                        ></Link>
                    </template>
                </div>
            </tr>
        </div>
    </AppLayout>
</template>
<script setup>
import { defineProps, ref, watch } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
import Alert from "../../Components/Alert.vue";
import SweetAlert from "../../Components/SweetAlert.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    students: Object,
    tags: Object,
    filters: Object,
});

const search = ref(props.filters.search);
const perPage = ref(props.filters.perPage);

const getTags = () => {
    Inertia.get(
        route("admin.santri.index"),
        {
            search: search.value,
            perPage: perPage.value,
        },
        {
            preserveState: true,
            replace: true,
        }
    );
};

// coba pakai debounce, mohon koreksi jika ada best practice nya
let typing = ref("");
let debounce = ref("");
const debounceSearch = (event) => {
    typing.value = "mengetik...";
    clearTimeout(debounce);
    debounce = setTimeout(() => {
        typing.value = null;
        Inertia.get(
            route("admin.santri.index"),
            {
                search: event.target.value,
                perPage: perPage.value,
            },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 600);
};
</script>
