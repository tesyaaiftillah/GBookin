        <body>
            <section class="auth">
                <div class="d-flex flex-row">
                    <div class="left-side">
                        <div class="container-fluid left-img" style="background-color: #222222;width: 41em;height:100vh;">
                            <img src="assets/img/authImg.png" alt="img-auth" style="margin-left:-12px;width: 41em;height:100vh;">
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="container-fluid" style="width: 100vh;">
                            <div class="body-text d-flex flex-column">
                                <div class="title-page mt-3 pt-3 ms-5">
                                    <a href="Home" class="title fw-bold" style="color: black; text-decoration:none;"><h1>Gbookin</h1></a>
                                </div>
                                <div class="content-page ms-5">
                                    <div class="container">
                                        <form action="<?= base_url('Auth/Register');?>" method="post">
                                            <div class="form-login">
                                                <div class="d-flex flex-column username mb-3">
                                                    <label for="username">Username</label>
                                                    <input type="text" id="username" name="username">
                                                </div>
                                                <div class="d-flex flex-column email mt-3 mb-3">
                                                    <label for="email">Email</label>
                                                    <input type="text" id="email" name="email">
                                                </div>
                                                <div class="d-flex flex-column password mt-3 mb-3">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </div>
                                                <div class="btn-auth mt-4 pt-4">
                                                    <div class="login-btn mb-3">
                                                        <button style="font-size: 16px;">Sign Up</button>
                                                    </div>
                                                    <div class="google-login">
                                                        <a href="#" class="btn btn-sm"><button style="border:none; background:none;font-size: 16px;"><i class="fa-brands fa-google me-3"></i>Google Account</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="footer-page d-flex flex-row" style="margin-top: 4.5em;">
                                            <p>Have an account ?</p>
                                            <a href="Login" class="ms-2 fw-bold" style="color:black;text-decoration:none;">Sign In</a>
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