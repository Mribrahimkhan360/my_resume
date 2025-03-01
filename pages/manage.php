<?php include 'includes/header.php'; ?>
<?php
if (isset($_SESSION['id'])){
    header('Location: login.php');
}
?>
<body style="display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;">
<!-- Sidebar -->
<?php include 'includes/sidebar.php'; ?>
<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include 'includes/nav_admin.php'; ?>
    <!-- Dashboard Cards -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Total: <?php //echo $userCount;
                        if (isset($userCount)){
                            echo $userCount;
                        }
                             ?>
                        </p>
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
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($students)){?>
                    <?php foreach ($students as $student) { ?>
                        <tr>
                            <td><?php echo $student['fname']; ?></td>
                            <td><?php echo $student['lname']; ?></td>
                            <td><?php echo $student['email']; ?></td>
                            <td><?php echo $student['mobile']; ?></td>
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
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>


