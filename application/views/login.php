<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/22eeb81f80.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-primary bg-primary static-top shadow">
        <div class="container">
            <a class="navbar-brand text-light" style="font-size: 25px;" href="#!">Sikerma Polibatam</a>
            <!-- <a class="text-light text-decoration-none" href="<?php echo base_url('auth/login'); ?>">Login</a> -->
        </div>
    </nav>
    <section class="bg-light text-center justify-content-center align-content-center">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-4 mx-5 my-5">
                    <img src="<?php echo base_url('assets/img/Polibatam.png'); ?>" class="img-fluid" width="400px">
                    <br><br>
                    <h3>Sikerma Polibatam</h3>
                </div>
                <div class="col-lg-5 mx-5 my-5">
                    <div class="card rounded-5 shadow">
                        <br>
                        <h3 class="text-center">Masuk</h3>
                        <form class="m-4" action="<?= base_url('index.php/login/checkcredentials') ?>" method="POST">
                            <!-- Username -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-label="username" aria-describedby="basic-addon1">
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Passworda-describedby=" basic-addon1 ">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary w-100 text-light border-1 ">Login</button>
                                <br>
                                <br>
                        </form>
                        
                        <span class=" me-3 ">Belum mempunyai akun ?</span>
                        <a href="<?= site_url('register'); ?>" class="btn btn-primary btn-sm">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class=" footer bg-primary ">
        <div class=" container text-center text-light my-1 ">
            <h6>Sikerma Polibatam</h6>
            <div class=" footer-icons mx-5 " style=" font-size: 20px; ">
                <a href=" # "><i class=" bi bi-facebook text-light me-2 "></i></a>
                <a href=" # "><i class=" bi bi-twitter text-light me-2 "></i></a>
                <a href=" # "><i class=" bi bi-linkedin text-light me-2 "></i></a>
                <a href=" # "><i class=" bi bi-instagram text-light "></i></a>
            </div>
            <!-- <ul class=" list-inline-item me-4" style="font-size: 15px;">
                <li class="list-inline-item"><a href="<?php echo base_url('pages/about'); ?>" class="text-light text-decoration-none">About</a></li>
                <li class="list-inline-item">⋅</li>
                <li class="list-inline-item"><a href="<?php echo base_url('pages/tos'); ?>" class="text-light text-decoration-none">Terms of use</a></li>
                <li class="list-inline-item">⋅</li>
                <li class="list-inline-item"><a href="<?php echo base_url(); ?>" class="text-light text-decoration-none">Home</a></li>
            </ul> -->
            <p>© 2023 Sikerma Polibatam, All Right Reserved.</p>
        </div>
    </footer>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js "></script>
    <script src=" <?php echo base_url('assets/js/scripts.js'); ?>"></script>

</body>

</html>