<template>
    <AppLayout>
        <div class="card p-1 text-capitalize">
            <div class="row">
                <div class="col my-1 form-group">
                    <input
                        type="text"
                        class="form-control-sm"
                        placeholder="Cari nama..."
                        @input="searchInput"
                    />
                    <!-- <small>
                        <span v-if="typing">You are typing</span>
                        <span v-if="message">You typed: {{ message }}</span>
                    </small> -->
                </div>
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
            <div class="d-md-flex justify-content-end">
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
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Jk</th>
                        <th>Usia</th>
                        <th>daerah</th>
                        <th>madin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="s in students">
                        <td>{{ s.nis }}</td>
                        <td>{{ s.nama }}</td>
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
                                            >Action</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Another action</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Something else here</a
                                        >
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Separated link</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script setup>
import { defineProps, ref } from "vue";
import AppLayout from "../../Shared/AppLayout.vue";
let message = ref();
let typing = ref();
let debounce = ref();
defineProps({
    students: Object,
});
const searchInput = (event) => {
    message.value = null;
    typing.value = "You are typing";
    clearTimeout(debounce);
    debounce = setTimeout(() => {
        typing.value = null;
        message.value = event.target.value;
    }, 600);
};
</script>
