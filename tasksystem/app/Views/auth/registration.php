<div class="container-fluid">
    <div class="vh-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-md-3">
                <div class="card card-shadow">
                    <div class="card-body text-center">
                        <form action="<?= $config['app_url'] ?>/auth/authenticate" method="post">
                            <h1 class="h3 mb-3 fw-normal">Registration</h1>
                            <div class="py-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingfullname" placeholder="Fullname" name="fullname">
                                    <label for="floatingfullname">fullname</label>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                                    <label for="floatinginput">username</label>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingemail" placeholder="Email" name="email">
                                    <label for="floatingemail">Email</label>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 py-2 my-2" type="submit" name="submit">Sign in</button>
                            <p class="mt-3">Don't have a account? <a href="<?= $config['app_url'] ?>/login">Sign in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>