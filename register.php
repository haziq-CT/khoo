<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">

                    <form action="registercode.php" method="POST">
                        <div class="form-group mb-3">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Email Id</label>
                                <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="cPassword" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Login Now</buton>
                            
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
?>