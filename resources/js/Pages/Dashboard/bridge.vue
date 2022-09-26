<template>
    <div>Akun anda terdeteksi mempunyai {{ jml_akun }} akun santri aktif</div>
    ambil pilihan, <button>Lanjut mendaftar 1 lagi</button> atau
    <button>Membuat akun baru</button> atau <button>Login</button>
</template>
<script>
import { defineProps } from "vue";
defineProps({
    jml_akun: String,
});
</script>
