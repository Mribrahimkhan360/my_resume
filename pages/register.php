<?php include 'includes/header.php'?>
    <form action="action.php" method="post">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Register</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="mb-3">
                                    <label for="first-name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first-name" name="fname" placeholder="Enter your first name">
                                </div>
                                <div class="mb-3">
                                    <label for="last-name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" name="lname" placeholder="Enter your last name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <p>Already have an account? <a href="login.php">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php include 'includes/footer.php'?>