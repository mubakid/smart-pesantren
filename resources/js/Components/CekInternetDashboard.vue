<template>
    <footer class="page-footer" :class="{ 'bg-danger': !onLine }">
        <div
            class="d-flex"
            :class="{
                'justify-content-end': onLine,
                'justify-content-center': !onLine,
            }"
        >
            <div>
                <span :class="{ 'text-light': !onLine }" v-if="!onLine"
                    ><i class="bx bx-wifi-off"></i> Kamu sedang Offline</span
                >
                <span v-else><i class="bx bx-wifi"></i></span>
            </div>
            <span class="text-secondary me-3 ms-2" v-if="onLine"
                >v3.0 | BakidDev © 2022
            </span>
        </div>
    </footer>
    <!-- <footer class="page-footer">ss</footer> -->
</template>

<script>
export default {
    data() {
        return {
            message: "Online",
            onLine: navigator.onLine,
            showBackOnline: false,
        };
    },
    methods: {
        doSomething() {
            alert("Hello!");
        },
        updateOnlineStatus(e) {
            const { type } = e;
            this.onLine = type === "online";
        },
    },
    watch: {
        onLine(v) {
            if (v) {
                this.showBackOnline = true;
                setTimeout(() => {
                    this.showBackOnline = false;
                }, 1000);
            }
        },
    },
    mounted() {
        window.addEventListener("online", this.updateOnlineStatus);
        window.addEventListener("offline", this.updateOnlineStatus);
    },
    beforeDestroy() {
        window.removeEventListener("online", this.updateOnlineStatus);
        window.removeEventListener("offline", this.updateOnlineStatus);
    },
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}

a,
button {
    color: #4fc08d;
}

button {
    background: none;
    border: solid 1px;
    border-radius: 2em;
    font: inherit;
    padding: 0.75em 2em;
    margin-bottom: 1rem;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
</style>
