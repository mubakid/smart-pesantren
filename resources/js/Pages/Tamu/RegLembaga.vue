<template>
    <div class="container text-center">
        <h4 class="display-6 mt-4">Menentukan Pilihan</h4>
        <div class="row mt-5">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Tentukan sekarang</div>

                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button
                            type="button"
                            class="btn btn-primary mx-2 my-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                        >
                            Madin
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary mx-2 my-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                        >
                            Daerah/Asrama
                        </button>
                        <!-- Modal -->
                        <button
                            type="button"
                            class="btn btn-primary mx-2 my-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                        >
                            Pendidikan Formal/Akademik
                        </button>
                        <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                        >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5
                                            class="modal-title"
                                            id="exampleModalLabel"
                                        >
                                            Modal title
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">...</div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                        >
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <div class="card-header">Lain waktu</div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <Button class="btn btn-primary">Lewati</Button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
