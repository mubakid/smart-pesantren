<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets') }}/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('assets') }}/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('assets') }}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/app.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet">
    <title>Maaf</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">

        <div class="error-404 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="card py-5">
                    <div class="row g-0">
                        <div class="col col-xl-5">
                            <div class="card-body p-4">

                                <h2 class="font-weight-bold display-4">Maaf</h2>
                                <p>Anda tidak mendapat izin untuk mengakses halaman ini
                                    <br>Pastikan anda mengarah ke halaman yang benar atau
                                    <br>Pastikan anda telah login
                                </p>
                                <div class="mt-5"> <a href="/home"
                                        class="btn btn-primary btn-lg px-md-5 radius-30">Home</a>
                                    <a href="/login"
                                        class="btn btn-outline-dark btn-lg ms-3 px-md-5 radius-30">Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/03/shutterstock_1338315902.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <div class="bg-white p-3 fixed-bottom border-top shadow">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">Follow Us :</li>
                    <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-facebook me-1'></i>Facebook</a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-twitter me-1'></i>Twitter</a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-google me-1'></i>Google</a>
                    </li>
                </ul>
                <p class="mb-0">Copyright © 2021. All right reserved.</p>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
</body>

</html>
