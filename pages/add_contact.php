<?php include 'includes/header.php'; ?>
<body style="display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;">
<?php
if (!isset($_SESSION['id'])){
    header('Location: login.php');
}
?>
<!-- Sidebar -->
<?php include 'includes/sidebar.php'; ?>
<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand text-white">Admin Dashboard</span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Dashboard Cards -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <!-- HTML Form for adding new contact -->
                <div class="container mt-5">
                    <h2>Add New Contact</h2>
                    <h4 class="text-center text-danger h4">
                        <?php
                        if (isset($_GET['message']) && $_GET['message'] == 'success') {
                            echo "<p style='color: green;'>Registration successful!</p>";
                        }
                        ?>
                    </h4>
                    <!-- Form to add a new contact -->
                    <form action="action.php" method="POST" class="container mt-5">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="text" name="mobile" id="phone" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website:</label>
                            <input type="text" name="website" id="website" class="form-control" required />
                        </div>
                        <button type="submit" class="btn btn-primary" name="add_contact">Add Contact</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>


