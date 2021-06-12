<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                            <h1 class="text-center fs-3 card-title mb-4 text-success">Login</h1>
                            <form method="POST" action="/login" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3 text-dark fs-5">
                                    <label class="mb-2" for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="vasia@mail.com" required autofocus>
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

                                <input type="hidden" name="frm_login">

                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success ms-auto">
                                        Confirm Login
                                    </button>
                                </div>
                            </form>         
                        </div>
                        <div class="card-body py-0 border-0">
                            <div class="text-center">
                                <a href="/registration" class="text-muted text-decoration-none fs-6">
                                    Don't have an account?
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
</body>
</html>