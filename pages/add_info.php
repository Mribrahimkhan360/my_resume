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
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Total: <?php echo $userCount; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Sales</h5>
                        <p class="card-text">$12,300 this month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">320 new orders</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example Table -->
        <div class="card">
            <h5 class="text-success"><?php
                if (isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                }
                else{
                    echo '';
                }
                ?></h5>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student) { ?>
                        <tr>
                            <td><?php echo $student['fname']; ?></td>
                            <td><?php echo $student['lname']; ?></td>
                            <td><?php echo $student['email']; ?></td>
                            <td>
                                <a href="action.php?edit=<?php echo $student['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="action.php?status=delete&id=<?php echo $student['id']; ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>


