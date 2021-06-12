<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center mb-4 mt-3">
                        <img src="https://cdn2.hubspot.net/hubfs/2177779/crm.png" alt="logo" width="120">
                    </div>
                    <div class="card shadow p-1 mb-5 bg-white rounded">
                        <div class="card-body p-5">
                            <h1 class="text-center fs-3 card-title mb-4 text-success">Registration</h1>
                            <form method="POST" action="/registration" class="needs-validation" novalidate="" autocomplete="off">

                                <div class="mb-3 text-dark fs-5">
                                    <label class="mb-2" for="username">Name</label>
                                    <input id="username" type="text" class="form-control" name="username" placeholder="vasia" required autofocus>
                                    <div class="invalid-feedback">
                                        Name is invalid
                                    </div>
                                </div>

                                <div class="mb-3 text-dark fs-5">
                                    <label class="mb-2" for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="vasia@mail.com" required>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100 text-dark fs-5">
                                        <label for="password">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="your password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100 text-dark fs-5">
                                        <label for="c_password">Confirm password</label>
                                    </div>
                                    <input id="c_password" type="password" class="form-control" name="cPassword" placeholder="confirm your password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <input type="hidden" name="frm_registration">

                                <div class="d-flex align-items-end">
                                    <button type="submit" class="btn btn-outline-success ms-auto">
                                        Registration
                                    </button>
                                </div>
                            </form>         
                        </div>
                        <div class="card-body py-0 border-0">
                            <div class="text-center">
                                <a href="/login" class="text-muted text-decoration-none fs-6">
                                    Have you an Account?
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        &copy; 2021 Kot Oleksii HomeWork PHP №7 - All rights reserved
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
</body>
</html>