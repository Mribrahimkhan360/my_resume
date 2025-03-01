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

<?php include 'includes/sidebar.php';?>
<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include 'includes/nav_admin.php'; ?>

    <!-- Dashboard Cards -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <!-- HTML Form for adding new contact -->
                <div class="container mt-5">
                    <h2>Add New Education</h2>
                    <h4 class="text-danger h4">
                        <?php
                        if (isset($_GET['message']) && $_GET['message'] == 'success') {
                            echo "<p style='color: green;'>Add education successful!</p>";
                        }
                        ?>
                    </h4>
                    <!-- Form to add a new contact -->
                    <form action="action.php" method="POST" class="container mt-5">
                        <div class="mb-3">
                            <label for="phone" class="form-label">B.sc :</label>
                            <input type="text" name="bsc" id="phone" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">HSC :</label>
                            <input type="text" name="hsc" id="email" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">SSC:</label>
                            <input type="text" name="ssc" id="website" class="form-control" required />
                        </div>
                        <button type="submit" class="btn btn-primary" name="add_education">Add Education</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>


