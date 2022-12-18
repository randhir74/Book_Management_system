<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"randhir");
    $name="";
    $email="";
    $mobile="";
    $address="";
    $query = "select *from users where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address'];
    }
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
                <a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
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
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <span><marquee behavior=" " direction="">This is Library Man Sys, It is available for you 24*7</marquee></span>
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">Mobile:</label>
                    <input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <textarea name="" class="form-control" id="" cols="40" rows="3" disabled><?php echo $address;?></textarea>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>