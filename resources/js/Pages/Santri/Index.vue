<template>
    <AppLayout>
        <Alert />
        <SweetAlert />
        <!-- <button @click="alertDisplay()"></button> -->
        <div class="card p-1 text-capitalize">
            <div class="row">
                <div class="col my-1">
                    <v-select
                        :options="dormitories"
                        :reduce="(dormitories) => dormitories.id"
                        label="name"
                        placeholder="Daerah"
                    />
                </div>
                <div class="col my-1">
                    <v-select
                        :reduce="(madin) => madin.id"
                        label="name"
                        :options="madin_educations"
                        placeholder="Madin"
                    />
                </div>
                <div class="col my-1">
                    <v-select
                        :reduce="(formal) => formal.id"
                        label="name"
                        :options="formal_educations"
                        placeholder="Formal"
                    />
                </div>
                <div class="col my-1">
                    <v-select :options="['2010']" placeholder="Tahun" />
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
                        <option value="5" selected>5</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <input
                        @keyup="debounceSearch"
                        type="text"
                        class="form-control-sm ms-2"
                        placeholder="Cari nama..."
                        v-model="search"
                        autofocus
                    />
                    <div
                        v-if="isTyping"
                        class="spinner-border spinner-border-sm ms-2"
                        role="status"
                    >
                        <span class="visually-hidden">Loading...</span>
                    </div>
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
                        <!-- <li>
                            <a class="dropdown-item" href="#">Pdf</a>
                        </li> -->
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
                        <th>#</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Jk</th>
                        <th>Usia</th>
                        <th>daerah</th>
                        <th>madin</th>
                        <th>formal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(s, index) in students.data" :key="s.id">
                        <td>{{ getNumbering(index) }}</td>
                        <td>{{ s.nama }}</td>
                        <td>{{ s.nis }}</td>
                        <td>{{ s.jenis_kelamin }}</td>
                        <td>{{ s.usia }}</td>
                        <td>{{ s.daerah }}</td>
                        <td>{{ s.madin }}</td>
                        <td>{{ s.formal }}</td>
                        <td>
                            <div class="btn-group">
                                <Link
                                    as="button"
                                    class="btn btn-outline-primary btn-sm"
                                    :href="s.editUrl"
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
                                        <Link
                                            :href="s.showUrl"
                                            class="dropdown-item"
                                            >Show</Link
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
            <Pagination :links="students" />
        </div>
        <vue-confirm-dialog></vue-confirm-dialog>
    </AppLayout>
</template>
<script setup>
import { defineProps, ref, watch } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
import Alert from "../../Components/Alert.vue";
import SweetAlert from "../../Components/SweetAlert.vue";
import { Inertia } from "@inertiajs/inertia";
import Pagination from "../../Components/SimplePagination.vue";

const handleClick = () => {
    this.$confirm({
        message: "Are you sure?",
        button: {
            no: "No",
            yes: "Yes",
        },
        /**
         * Callback Function
         * @param {Boolean} confirm
         */
        callback: (confirm) => {
            if (confirm) {
                // ... do something
            }
        },
    });
};

const props = defineProps({
    showUrl: Object,
    perHal: Number,
    students: Object,
    tags: Object,
    filters: Object,
    dormitories: Object,
    madin_educations: Object,
    formal_educations: Object,
});
const search = ref(props.filters.search);
const perPage = ref(props.filters.perPage);

let isTyping = ref(false);
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
let debounce = ref("");
const debounceSearch = (event) => {
    isTyping.value = true;
    // clearTimeout(debounce);
    debounce = setTimeout(() => {
        isTyping.value = false;
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
const getNumbering = (index) => {
    return (
        props.students.current_page * props.perHal - props.perHal + index + 1
    );
};
</script>
