<template>
    <div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="pushmenu"
                        href="#"
                        role="button"
                        ><i class="fas fa-bars"></i
                    ></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <Link
                        class="btn btn-sm btn-outline-success"
                        method="post"
                        as="button"
                        :href="route('logout')"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                    </Link>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
