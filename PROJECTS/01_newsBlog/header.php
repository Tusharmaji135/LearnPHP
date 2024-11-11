<?php
include './config.php';
$page = basename($_SERVER['PHP_SELF']);
switch ($page) {
    case 'single.php':
        // echo "Single Page";
        if (isset($_GET['id'])) {
            $sql_title = "SELECT * FROM post WHERE post_id = {$_GET['id']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Error in mysqli_query : Title");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title =  $row_title['title'];
        } else {
            $page_title = "No Post Found";
        }
        break;
    case 'category.php':
        if (isset($_GET['cid'])) {
            $sql_title = "SELECT * FROM category WHERE category_id = {$_GET['cid']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Error in mysqli_query : Title");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title =  $row_title['category_name'] . " News";
        } else {
            $page_title = "No Post Found";
        }
        break;
    case 'author.php':
        if (isset($_GET['aid'])) {
            $sql_title = "SELECT * FROM user WHERE user_id = {$_GET['aid']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Error in mysqli_query : Title");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = "News By " .  $row_title['first_name'] . " " . $row_title['last_name'];
        } else {
            $page_title = "No Post Found";
        }
        break;
    case 'search.php':
        if (isset($_GET['search'])) {

            $page_title =  $_GET['search'];
        } else {
            $page_title = "No Search Result Found";
        }
        break;

    default:
        $page_title = "News Site";
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/961e2cf19b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class=" col-md-offset-4 col-md-4">
                    <a href="index.php" id="logo"><img src="images/news.jpg"></a>
                </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
                <div class="col-md-3 ms-auto text-end custom-logo">
     <!-- Use fa-2x, fa-3x, etc., for larger sizes -->
    <a href="./admin/index.php"><i class="fa-regular fa-circle-user fa-4x"></i></a>
</div>

<!-- /LOGO-Out -->

</div>
</div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    include './config.php';
                    if (isset($_GET['cid'])) {
                        $cat_id = $_GET['cid'];
                    }
                    $sql = "SELECT * FROM category WHERE post > 0";
                    $result = mysqli_query($conn, $sql) or die("Error in mysqli_query :category");
                    if (mysqli_num_rows($result) > 0) {
                        $active = "";
                        
                        ?>
                        <ul class='menu'>
                            <li><a href='<?php echo $hostname; ?>'>Home</a></li>
                            <?php while ($row = mysqli_fetch_assoc($result)) {
                                if (isset($_GET['cid'])) {
                                    
                                    if ($row['category_id'] == $cat_id) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    }
                                }

                            ?>
                                <li><a class="<?php echo $active ?>" href='category.php?cid=<?php echo $row['category_id'] ?>'><?php echo $row['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->