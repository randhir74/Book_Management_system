<?php
    require('functions.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 300px;
            height: 450px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System</a>
            </div>
            <!-- <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];
            ?></strong></span></font>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['email'];
            ?></strong></span></font> -->
            <span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="change_password.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <br>
<nav class="navbar navbar-expand-ig navbar-light" style="background-color: #e3f2fd">
        <div class="container-fluid">
            <ul class="container-fluid">
                <li class="nav-item">
                    <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Book</a>
                        <a href="" class="dropdown-item">Manage Book</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Category</a>
                        <a href="" class="dropdown-item">Manage Category</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Add New Author</a>
                        <a href="" class="dropdown-item">Manage Author</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="admin_dashboard.php" class="nav-link">Issue Book</a>
                </li>
            </ul>
        </div>
</nav>
    <span><marquee behavior=" " direction="">This is Library Man Sys, It is available for you 24*7</marquee></span>
    <br><br>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Register Users</div>
                <div class="card-body">
                    <p class="card-text">No of total users:<?php echo get_user_count();?></p>
                    <a href="" class="btn btn-danger" target="_blank">View Register Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Register Books</div>
                <div class="card-body">
                    <p class="card-text">No of available books:<?php echo get_book_count();?></p>
                    <a href="regbooks.php" class="btn btn-primary" target="_blank">View Register Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Registered Category</div>
                <div class="card-body">
                    <p class="card-text">No of total users:<?php echo get_category_count();?></p>
                    <a href="" class="btn btn-danger" target="_blank">View Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Register authors</div>
                <div class="card-body">
                    <p class="card-text">No of available authors :<?php echo get_category_count();?></p>
                    <a href="" class="btn btn-info" target="_blank">View Register Authors</a>
                </div>
            </div>
        </div><div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Issued Books</div>
                <div class="card-body">
                    <p class="card-text">No of Isuued Books:2</p>
                    <a href="" class="btn btn-success" target="_blank">View Issued Books</a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-3"></div>
</body>
</html>