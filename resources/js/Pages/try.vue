<template>
    <div>
        <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">SuperVideo</h4>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-house mr-2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-fire mr-2"></i>
                    Populer
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-newspaper mr-2"></i>
                    News
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-bicycle mr-2"></i>
                    Sports
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-boombox mr-2"></i>
                    Music
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-film mr-2"></i>
                    Film
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-bookmark mr-2"></i>
                    Bookmark
                </a>
            </li>
        </div>
    </div>
    <div class="p-4" id="main-content">
        <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
        </button>
        <div class="card mt-5">
            <div class="card-body">
                <h4>Lorem Ipsum</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Doloremque animi maxime at minima. Totam vero omnis ducimus
                    commodi placeat accusamus, repudiandae nemo, harum magni
                    aperiam esse voluptates. Non, sapiente vero?
                </p>
            </div>
        </div>
    </div>
</template>
<script setup>
$(document).ready(function () {
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {
        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document
            .getElementById("main-content")
            .classList.toggle("active-main-content");
    });
});
</script>
