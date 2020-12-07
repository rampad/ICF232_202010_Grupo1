<div class="page login-page">
    <div class="container  align-items-center">
        <div class="form-holder has-shadow">
            
                <!-- Logo & Information Panel-->

               
                <!-- Form Panel    -->
                <div class="lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form method="post" class="form-validate" action="">
                                <div class="form-group">
                                    <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                                    <label for="login-username" class="label-material">Usuario</label>
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                                    <label for="login-password" class="label-material">Contrase&ntilde;a</label>
                                </div>
                                <button type="submit" id="login" href="" class="btn btn-primary">Login</button>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form>
                            <div>
                                <?= get_msg(); ?>
                            </div>
                            <!-- <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a> -->
                        </div>
                        
                    </div>
                </div>
            </div>
        
    </div>
    <div class="copyrights text-center text-dark">
    </div>
</div>