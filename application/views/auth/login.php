<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Meta -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="../../assets/css/auth.css">
            <!-- Script JS -->
            <script src="../../assets/js/slider.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
            <!--------------->
            <title>Document</title>
        </head>
        <body>
            <section class="auth">
                <div class="d-flex flex-row">
                    <div class="left-side">
                        <div class="container-fluid left-img" style="background-color: #222222;width: 41em;height:100vh;">
                            <div class="image"></div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="container-fluid" style="width: 100vh;">
                            <div class="body-text d-flex flex-column">
                                <div class="title-page mt-3 pt-3 ms-5">
                                    <a href="Home" class="title fw-bold" style="color: black; text-decoration:none;"><h1>Bausastra</h1></a>
                                </div>
                                <div class="content-page ms-5">
                                    <div class="container">
                                        <form action="" method="post">
                                            <div class="form-login">
                                                <div class="d-flex flex-column email mt-3 mb-3">
                                                    <label for="email">Email</label>
                                                    <input type="text" id="email">
                                                </div>
                                                <div class="d-flex flex-column password mt-3 mb-3">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </div>
                                                <div class="essential d-flex flex-row mt-3 mb-3">
                                                    <div class="remember-input d-flex">
                                                        <input type="checkbox" name="" id="checkbox">
                                                        <label class="ms-3" for="checkbox">Remember Me</label>
                                                    </div>
                                                    <div class="btn-forgot">
                                                        <a href="" class="link fw-bold" style="color:black;text-decoration:none;margin-left: 10.5em;">Forgot Password</a>
                                                    </div>
                                                </div>
                                                <div class="btn-auth mt-4 pt-4">
                                                    <div class="login-btn mb-3">
                                                        <button style="font-size: 16px;">Sign In</button>
                                                    </div>
                                                    <div class="google-login">
                                                        <a href="#" class="btn btn-sm"><button style="border:none; background:none;font-size: 16px;"><i class="fa-brands fa-google me-3"></i>Google Account</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="footer-page d-flex flex-row mt-5 pt-5">
                                            <p>Don't Have an account ?</p>
                                            <a href="Register" class="ms-2 fw-bold" style="color:black;text-decoration:none;">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </html>