<!-- <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div> -->
<!-- Main wrapper  -->
     

<div id="main-wrapper" style="background-color: darkgrey;">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Register</h4>
                            <form >
                                <div class="form-group" >
                                    <label class="control-label">Name</label>
                                    <input type="text" required name = 'name' class="form-control" placeholder="FirstName LastName">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email </label>
                                    <input type="email" required name = 'email' class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number</label>
                                    <input type="number" required name = 'phone' class="form-control" placeholder="(+000) 000 000 000">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" required name = 'password' class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Confirm Password</label>
                                    <input type="password" required name = 'cpassword' class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Agree the terms and policy
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"name="register">Register</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="/auth/signin"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="signup.js"></script>