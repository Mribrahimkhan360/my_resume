<?php include 'includes/header.php'; ?>
<div class="container text-end mt-3">
    <a href="login.php" class="btn btn-primary">Login</a>
    <a href="register.php" class="btn btn-secondary">Register</a>
</div>
<div class="resume-container row">
    <div class="col-md-4 left-section">
        <?php
        // Database connection
        $link = mysqli_connect('localhost', 'root', '', 'php-15-database');
        ?>
        <div class="text-center">
            <img src="../assets/img/profile.jpeg" alt="Profile" class="profile-img mb-3">
            <?php
            // Fetch contact information
            $sql = "SELECT * FROM users ORDER BY id LIMIT 1";
            // Fetch latest contact details
            $res = mysqli_query($link, $sql);
            $profile = mysqli_fetch_assoc($res);
            ?>
            <h5 class="text-uppercase">
                <?php if ($profile){
                echo $profile['fname'];
                echo ' ';
                echo $profile['lname'];
                //echo $profile['designation'];
                } ?>
            </h5>
            <p class="text-uppercase">
                <?php if ($profile){
                    echo $profile['designation'];
                    //echo 'Freelance Writer';
                }else{
                    echo 'Freelance Writer';
                } ?>
            </p>
        </div>
        <?php


        if (!$link) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // Fetch contact information
        $sql = "SELECT * FROM contact ORDER BY id DESC LIMIT 1"; // Fetch latest contact details
        $res = mysqli_query($link, $sql);
        $contact = mysqli_fetch_assoc($res);
        ?>

        <div class="mt-4">
            <h5 class="section-title">Contact</h5>
            <?php if ($contact) { ?>
                <p><strong>Phone: </strong> <?php echo $contact['mobile']; ?></p>
                <p><strong>Email:</strong> <?php echo $contact['email']; ?></p>
                <p class="d-flex"><strong>Website: </strong>
                    <a class="nav-link text-success px-1" href="<?php echo $contact['website']; ?>" target="_blank">
                        <?php echo $contact['website']; ?>
                    </a>
                </p>
            <?php } else { ?>
                <p>No contact information available.</p>
            <?php } ?>
        </div>

        <div class="mt-4">
            <h5 class="section-title">Education</h5>
            <?php
            // Fetch contact information
            $sql = "SELECT * FROM education ORDER BY id DESC LIMIT 1";
            $res = mysqli_query($link, $sql);
            $education = mysqli_fetch_assoc($res);
            if ($contact) {
            ?>
            <p> <?php echo $education['bsc']; ?></></p>
            <p> <?php echo $education['hsc']; ?></p>
            <p> <?php echo $education['ssc']; ?></p>
            <?php } else { ?>
                <p>No contact information available.</p>
            <?php } ?>
        </div>
        <?php
        $sql = "SELECT * FROM skils"; // Correct variable usage
        $res = mysqli_query($link, $sql);

        if ($res) {
            $technicalSkills = mysqli_fetch_all($res, MYSQLI_ASSOC); // Fetch all rows as an associative array
        } else {
            $technicalSkills = [];
        }
        ?>
        <div class="mt-4">
            <h5 class="section-title">Technical Skills</h5>
            <?php foreach ($technicalSkills as $technicalSkill) { ?>
                <p><?php echo $technicalSkill['skill']; ?></p>
            <?php } ?>
        </div>

    </div>
    <?php

    // Fetch experience information
    $sql = "SELECT * FROM experience"; // Fetch experience details
    $res = mysqli_query($link, $sql);
    ?>
    <div class="col-md-8 p-4">
        <h3 class="fw-bold">Professional Experience</h3>
        <hr>
        <div>
            <?php while ($exp = mysqli_fetch_assoc($res)) { ?>
                <h5><?php echo $exp['position']; ?> / <?php echo $exp['title']; ?></h5>
                <p><?php echo $exp['company']; ?></p>
                <ul>
                    <li><?php echo $exp['description']; ?></li>
                </ul>
            <?php } ?>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>
