<?php include 'header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 user-reg-form">
                <div class="users form form-wrapper">
                    <h3>User Registration</h3>
                    <form id="UserRegisterForm" method="post" name="registration">
                        <div class="input name required">
                            <label for="UserName">Name</label>
                            <input name="UserName" placeholder="Name"  type="text"  value="" required="required">
                        </div>
                        <div class="input name required">
                            <label for="UserName">Email</label>
                            <input name="UserEmail" placeholder="Email"  type="text" value="" required="required">
                        </div>
                        <div class="input password required">
                            <label for="UserPassword">Password</label>
                            <input name="UserPassword" placeholder="Password"  type="password" value="" required="required">
                        </div>
                        <div class="input confirm_password required">
                            <label for="UserConfirmPassword">Confirm Password</label>
                            <input name="UserConfirmPassword" placeholder="ConfirmPassword"  value="" type="password" required="required">
                        </div>
                        <div class="submit">
                            <input class="myButton" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
