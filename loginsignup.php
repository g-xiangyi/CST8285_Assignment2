<?php include 'header.php' ?>

<div class="container">
        <div class="row" style = "margin-top:10%;">
            <div class="col-md-6 col-lg-6 col-md-offset-2">
                <form role="form" method="post" action="signup.php">

                    <h1 class="text-center">New Student?</h1>

                    <fieldset>

                        <div class="form-group  ">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                        </div>

                        <div class="form-group  ">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name">
                        </div>

                        <div class="form-group ">
                            <label for="">Date Of Birth</label>
                            <input type="text" class="form-control" name="dateofbirth" id="" placeholder="dateofbirth">
                        </div>

                        <div class="form-group  ">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="Email">
                        </div>

                        <div class="form-group ">
                            <label for="">Phone</label>
                            <input type="phone" class="form-control" name="phone" id="" placeholder="Phone Number">
                        </div>

                        <div class="form-group ">
                            <label for="mom">Mom's Phone</label>
                            <input type="phone" class="form-control" name="mom_phone" id="" placeholder="Mom's Phone Number">
                        </div>

                        <div class="form-group ">
                            <label for="dad">Dad's Phone</label>
                            <input type="phone" class="form-control" name="dad_phone" id="" placeholder="Dad's Phone Number">
                        </div>

                        <div class="form-group ">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="" placeholder="Address">
                        </div>

                        <div class="form-group  ">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="pwd" id="password" placeholder="Password">
                        </div>

                        <div class="form-group  ">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" name="password" id="confirm_password" placeholder="Confirm Password">
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">
                                    I accept the <a href="#">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block">
                                Register
                            </button>
                            <a href="#">Already have an account?</a>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="col-md-6 col-lg-6 col-md-offset-2">
                <form role="form" method="POST" action="login.php">

                    <h1 class="text-center">Current Student</h1>

                    <fieldset>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="Email">
                        </div>

                        <div class="form-group  ">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-block">
                                Log In
                            </button>
                        </div>

                    </fieldset>

                </form>
            </div>

        </div>
    </div>

<?php include 'footer.php' ?>