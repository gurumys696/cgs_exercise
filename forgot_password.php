<?php include 'header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 forgotPassword">
                <div class="users form form-wrapper">
                    <h3>Forgot Password</h3>
                    <form id="UserForgotForm" method="post" accept-charset="utf-8">
                        <div style="display:none;">
                            <input type="hidden" name="_method" value="POST">
                        </div>

                        <div class="input email required">
                            <label for="UserEmail">Email</label>
                            <input name="UserEmail" placeholder="Email Address" maxlength="100" type="email"  required="required">
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



