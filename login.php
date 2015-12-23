
<?php include 'header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 login-form">
                <div class="users form form-wrapper">
                    <h3>User Login</h3>
                    <form id="UserRegisterForm" method="post" accept-charset="utf-8">
                       <div class="input name required">
                            <label for="UserName">Email</label>
                            <input name="UserName" placeholder="Email"  type="text"  required="required">
                        </div>

                        <div class="input password required">
                            <label for="UserPassword">Password</label>
                            <input name="UserPassword" placeholder="Password"  type="password"  required="required">
                        </div>
                        <div class="forgot-remember">
                            <ul class="list-inline">
                                <li class="remember-me"><label><input type="checkbox"> Remember Me</label></li>
                                <li class="forgot"><a href="forgot_password.php">Forgot Password ?</a></li>
                            </ul>
                        </div>

                        <div class="submit">
                            <input class="myButton" type="submit" value="Submit">
                        </div>
                        <div class="already-account text-center">
                            <p>You Don't have an account?</p>
                            <a href="registration_form.php">SignUp Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>