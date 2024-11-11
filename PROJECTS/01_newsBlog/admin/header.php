<?php
include './config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: {$hostname}/admin/");
    // to prevent further execution of the script.
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/961e2cf19b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin"">
    <!-- container -->
    <div class=" container">
        <!-- row -->
        <div class="row">
            <!-- hh -->
            <div class="col-md-3 ms-auto text-end custom-logo">
                <!-- Use fa-2x, fa-3x, etc., for larger sizes -->
                <a href="../index.php"><i class="fa-solid fa-house fa-4x"></i></i></a>
            </div>
            <!-- hh -->




            <!-- LOGO -->
            <div class="col-md-2 move">
                <a href="../index.php"><img class="logo" src="images/news.jpg"></a>
            </div>
            <!-- /LOGO -->
            <!-- LOGO-Out -->
            <div class="col-md-offset-9  col-md-3 move">
                <a href="logout.php" class="admin-logout">Hello,<?php echo $_SESSION['username']; ?> <b style="color:black;">logout</b></a>
            </div>
            <!-- /LOGO-Out -->
        </div>
    </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="admin-menu">
                        <li>
                            <a href="post.php">Post</a>
                        </li>
                        <?php
                        if ($_SESSION['role'] == '1') {
                            // display additional menu items for admin


                        ?>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->