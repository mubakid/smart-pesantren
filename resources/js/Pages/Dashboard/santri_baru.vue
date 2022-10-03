<template>
    <Head><title>Pendaftaran</title></Head>
    <AppLayout>
        <div
            class="alert alert-primary border-0 bg-primary alert-dismissible fade show py-2"
        >
            <div class="d-flex align-items-center">
                <div class="font-35 text-white">
                    <i class="bx bx-bookmark-heart"></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Assalamualaikum,</h6>
                    <div class="text-white">
                        {{ $page.props.user.name }}, Jangan lupa menyelesaikan
                        admnistrasi pembayaran
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
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div
                    class="card radius-10 border-start border-0 border-3 border-info"
                >
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Orders</p>
                                <h4 class="my-1 text-info">4805</h4>
                                <p class="mb-0 font-13">+2.5% from last week</p>
                            </div>
                            <div
                                class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"
                            >
                                <i class="bx bxs-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card radius-10 border-start border-0 border-3 border-danger"
                >
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1 text-danger">$84,245</h4>
                                <p class="mb-0 font-13">+5.4% from last week</p>
                            </div>
                            <div
                                class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"
                            >
                                <i class="bx bxs-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card radius-10 border-start border-0 border-3 border-success"
                >
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Bounce Rate</p>
                                <h4 class="my-1 text-success">34.6%</h4>
                                <p class="mb-0 font-13">-4.5% from last week</p>
                            </div>
                            <div
                                class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"
                            >
                                <i class="bx bxs-bar-chart-alt-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card radius-10 border-start border-0 border-3 border-warning"
                >
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">
                                    Total Customers
                                </p>
                                <h4 class="my-1 text-warning">8.4K</h4>
                                <p class="mb-0 font-13">+8.4% from last week</p>
                            </div>
                            <div
                                class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"
                            >
                                <i class="bx bxs-group"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from "../../Shared/AppLayout.vue";
</script>
