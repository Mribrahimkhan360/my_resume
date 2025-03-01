<?php include 'includes/header.php'?>
<?php
if (isset($_SESSION['id'])){
    header('Location: home.php');
}
?>
<form action="action.php" method="post">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-danger h4">
                            <?php
                            if (isset($_GET['message']) && $_GET['message'] == 'success') {
                                echo "<p style='color: green;'>Registration successful!</p>";
                            }
                            ?>
                        </h4>
                        <form action="action.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Don't have an account? <a href="register.php">Register here</a></p>
                        <p><a href="#">Forgot your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include 'includes/footer.php'?>
