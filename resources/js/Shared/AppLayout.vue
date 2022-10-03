<template>
    <!--wrapper-->
    <div
        class="wrapper"
        :class="{ toggled: toggle, 'sidebar-hovered': sidebar }"
    >
        <!--sidebar wrapper -->
        <div
            class="sidebar-wrapper"
            data-simplebar="true"
            @mouseover="handleSidebarHover"
            @mouseout="handleSidebarOut"
        >
            <div class="sidebar-header">
                <div>
                    <img :src="logoUrl" class="logo-icon" alt="logo icon" />
                </div>
                <div>
                    <h4 class="logo-text text-success ms-3">MUBAKID</h4>
                </div>
                <div class="toggle-icon ms-auto" @click="toggleIconHandle">
                    <i class="bx bx-menu-alt-left text-success"></i>
                </div>
            </div>
            <!--navigation-->
            <SidebarMenu :role="$page.props.role" />
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex">
                <nav class="navbar navbar-expand">
                    <div
                        class="mobile-toggle-menu"
                        @click="mobileToggleMenuHandle"
                    >
                        <i class="bx bx-menu"></i>
                    </div>
                    <div class="d-none d-md-block">
                        <div class="text-light">
                            {{
                                $page.props.tgl_masehi +
                                " " +
                                $page.props.tgl_hijriah.day +
                                " " +
                                $page.props.tgl_hijriah.month.en +
                                " " +
                                $page.props.tgl_hijriah.year +
                                " H"
                            }}
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-search"></i>
                                </a>
                            </li> -->
                            <li
                                class="nav-item dropdown dropdown-large"
                                v-if="$page.props.role == 'admin'"
                            >
                                <a
                                    class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i class="bx bx-category"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 g-3 p-3">
                                        <div class="col text-center">
                                            <div
                                                class="app-box mx-auto bg-gradient-cosmic text-white"
                                            >
                                                <i class="bx bx-group"></i>
                                            </div>
                                            <div class="app-title">
                                                Bendahara
                                            </div>
                                        </div>
                                        <div class="col text-center">
                                            <div
                                                class="app-box mx-auto bg-gradient-burning text-white"
                                            >
                                                <i class="bx bx-atom"></i>
                                            </div>
                                            <div class="app-title">Madin</div>
                                        </div>
                                        <div class="col text-center">
                                            <div
                                                class="app-box mx-auto bg-gradient-lush text-white"
                                            >
                                                <i class="bx bx-shield"></i>
                                            </div>
                                            <div class="app-title">
                                                Hankamtib
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="user-box dropdown">
                        <a
                            class="d-flex nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                                :src="imageUrl"
                                class="user-img"
                                alt="user avatar"
                            />
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">
                                    {{ $page.props.user.name }}
                                </p>
                                <p class="designattion mb-0">
                                    {{ $page.props.role }}
                                </p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <!-- <li>
                                <a class="dropdown-item" href="javascript:;"
                                    ><i class="bx bx-user"></i
                                    ><span>Profile</span></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;"
                                    ><i class="bx bx-cog"></i
                                    ><span>Settings</span></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="/home"
                                    ><i class="bx bx-home-circle"></i
                                    ><span>Dashboard</span></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;"
                                    ><i class="bx bx-dollar-circle"></i
                                    ><span>Earnings</span></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;"
                                    ><i class="bx bx-download"></i
                                    ><span>Downloads</span></a
                                >
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li> -->
                            <li>
                                <Link
                                    class="dropdown-item"
                                    :href="route('logout')"
                                    method="post"
                                    ><i class="bx bx-log-out-circle"></i
                                    ><span>Logout</span></Link
                                >
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content text-start">
                <slot />
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon" @click="toggleIconHandle"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"
            ><i class="bx bxs-up-arrow-alt"></i
        ></a>
        <!--End Back To Top Button-->
        <CekInternet />
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <!-- <div class="switcher-wrapper" :class="{ 'switcher-toggled': switcher }">
        <div class="switcher-btn" @click="switcherHandle">
            <i class="bx bx-cog bx-spin"></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button
                    type="button"
                    class="btn-close ms-auto close-switcher"
                    aria-label="Close"
                    @click="switcherHandle"
                ></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="lightmode"
                        checked
                    />
                    <label class="form-check-label" for="lightmode"
                        >Light</label
                    >
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="darkmode"
                    />
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="semidark"
                    />
                    <label class="form-check-label" for="semidark"
                        >Semi Dark</label
                    >
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    id="minimaltheme"
                    name="flexRadioDefault"
                />
                <label class="form-check-label" for="minimaltheme"
                    >Minimal Theme</label
                >
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div
                            class="indigator headercolor1"
                            id="headercolor1"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor2"
                            id="headercolor2"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor3"
                            id="headercolor3"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor4"
                            id="headercolor4"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor5"
                            id="headercolor5"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor6"
                            id="headercolor6"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor7"
                            id="headercolor7"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator headercolor8"
                            id="headercolor8"
                        ></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">Sidebar Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div
                            class="indigator sidebarcolor1"
                            id="sidebarcolor1"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor2"
                            id="sidebarcolor2"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor3"
                            id="sidebarcolor3"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor4"
                            id="sidebarcolor4"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor5"
                            id="sidebarcolor5"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor6"
                            id="sidebarcolor6"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor7"
                            id="sidebarcolor7"
                        ></div>
                    </div>
                    <div class="col">
                        <div
                            class="indigator sidebarcolor8"
                            id="sidebarcolor8"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--end switcher-->
</template>
<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { ref, defineProps, onMounted } from "vue";
import SidebarMenu from "./SidebarMenu.vue";
import $ from "jquery";
import CekInternet from "../Components/CekInternetDashboard.vue";
let toggle = ref(false);
let sidebar = ref(false);
let switcher = ref(false);

const imageUrl = new URL(
    "../../../public/assets/user-profile.png",
    import.meta.url
);
const logoUrl = new URL("../../../public/assets/logo.png", import.meta.url);

const mobileToggleMenuHandle = () => {
    toggle.value = true;
};
const toggleIconHandle = () => {
    toggle.value = !toggle.value;
};
const handleSidebarHover = () => {
    sidebar.value = true;
};
const handleSidebarOut = () => {
    sidebar.value = false;
};
const switcherHandle = () => {
    switcher.value = !switcher.value;
};
defineProps({
    // tgl_hijriah: Object,
});

onMounted(() => {
    // console.log(this.tgl_hijriah);
});
$(function () {
    "use strict";
    // new PerfectScrollbar(".header-message-list"),
    // new PerfectScrollbar(".header-notifications-list"),
    $(".mobile-search-icon").on("click", function () {
        $(".search-bar").addClass("full-search-bar");
    }),
        $(".search-close").on("click", function () {
            $(".search-bar").removeClass("full-search-bar");
        }),
        // $(function () {
        //     for (
        //         var e = window.location,
        //             o = $(".metismenu li a")
        //                 .filter(function () {
        //                     return this.href == e;
        //                 })
        //                 .addClass("")
        //                 .parent()
        //                 .addClass("mm-active");
        //         o.is("li");

        //     )
        //         o = o
        //             .parent("")
        //             .addClass("mm-show")
        //             .parent("")
        //             .addClass("mm-active");
        // }),
        // $(function () {
        //     $("#menu").metisMenu();
        // }),
        $(".chat-toggle-btn").on("click", function () {
            $(".chat-wrapper").toggleClass("chat-toggled");
        }),
        $(".chat-toggle-btn-mobile").on("click", function () {
            $(".chat-wrapper").removeClass("chat-toggled");
        }),
        $(".email-toggle-btn").on("click", function () {
            $(".email-wrapper").toggleClass("email-toggled");
        }),
        $(".email-toggle-btn-mobile").on("click", function () {
            $(".email-wrapper").removeClass("email-toggled");
        }),
        $(".compose-mail-btn").on("click", function () {
            $(".compose-mail-popup").show();
        }),
        $(".compose-mail-close").on("click", function () {
            $(".compose-mail-popup").hide();
        }),
        $(".switcher-btn").on("click", function () {
            $(".switcher-wrapper").toggleClass("switcher-toggled");
        }),
        $(".close-switcher").on("click", function () {
            $(".switcher-wrapper").removeClass("switcher-toggled");
        }),
        $("#lightmode").on("click", function () {
            $("html").attr("class", "light-theme");
        }),
        $("#darkmode").on("click", function () {
            $("html").attr("class", "dark-theme");
        }),
        $("#semidark").on("click", function () {
            $("html").attr("class", "semi-dark");
        }),
        $("#minimaltheme").on("click", function () {
            $("html").attr("class", "minimal-theme");
        });
    $(window).on("scroll", function () {
        $(this).scrollTop() > 300
            ? $(".back-to-top").fadeIn()
            : $(".back-to-top").fadeOut();
    });
    $(".back-to-top").on("click", function () {
        return (
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                600
            ),
            !1
        );
    });
});
</script>
