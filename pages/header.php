<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="assets/css/<?php echo $css ?>.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ms-auto">
        <div class="container">
            <a href="" class="navbar-brand">BRAND LOGO</a>
            <ul class="navbar-nav">
                <li><a href="action.php?page=home" class="nav-link active">HOME</a></li>
                <li><a href="action.php?page=calc" class="nav-link">CALCULATOR</a></li>
                <li><a href="action.php?page=series" class="nav-link">SERIES</a></li>
                <li><a href="action.php?page=product" class="nav-link">PRODUCT</a></li>
                <li><a href="action.php?page=blog" class="nav-link">BLOG</a></li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-target="#dropdown" data-bs-toggle="dropdown">FOLLOW US</a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark" id="dropdown">
                        <li><a href="" class="dropdown-item">Facebook</a></li>
                        <li><a href="" class="dropdown-item">Twitter</a></li>
                        <li><a href="" class="dropdown-item">LinkedIN</a></li>
                        <li><a href="" class="dropdown-item">Skype</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?page=logout" class="dropdown-item">Logout</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
<?php } ?>

