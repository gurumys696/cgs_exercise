<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 reset-password">
            <div class="form form-wrapper">
                <div class="input password required">
                    <label for="UserNewPassword">New Password</label>
                    <input name="UserNewPassword" placeholder="NewPassword"  type="password"  required="required">
                </div>
                <div class="input password required">
                    <label for="UserConfirmPassword">Confirm Password</label>
                    <input name="UserConfirmPassword" placeholder="Confirm Password"  type="password"  required="required">
                </div>
                <div class="submit">
                    <input class="myButton" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include  'footer.php'?>
