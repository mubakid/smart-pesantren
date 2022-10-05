<template>
    <div
        v-if="$page.props.flash.message"
        class="alert alert-success border-0 bg-success alert-dismissible fade show py-2"
    >
        <div class="d-flex align-items-center">
            <div class="font-35 text-white">
                <i class="bx bxs-check-circle"></i>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-white">Sukses</h6>
                <div class="text-white">
                    {{ $page.props.flash.message }}
                </div>
            </div>
        </div>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
</template>
<script setup></script>
