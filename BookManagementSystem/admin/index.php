<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Admin Login</title>
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
    <div>
    <?php echo"Good work man"; ?>
    <!-- <h3>jvnei</h3> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signup.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <span><marquee behavior=" " direction="">This is Library Man Sys, It is available for you 24*7</marquee></span>
    <br><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h4>Library Timing</h4>
            <ul>
                <li>Opening Time : 10 AM</li>
                <li>Closing Time : 9 PM</li>
                <li>Sunday Off</li>
            </ul>
            <h4>Facilities</h4>
            <ul>
                <li>AC</li>
                <li>Free Wi-Fi</li>
                <li>RO Water</li>
                <li>Peaceful Environment</li>
                <li>Discussion Room</li>
            </ul>
        </div>
    </div>
    <div class="col-md-8" id="main_content"> 
        <center><h3>Admin Login Form</h3></center>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Email Id</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <?php
        session_start();
            if(isset($_POST['login'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"randhir");
                $query = "select *from admins where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email'] == $_POST['email']){
                        if($row['password']==$_POST['password']){
                            //echo "Login successfully";
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['email'] = $row['email'];
                            header("Location:admin_dashboard.php");
                        }
                        else{
                            ?>
                            <br><br><center><span class="alert-danger">Wrong Password</span></center>
                            <?php
                        }
                    }
                    else{
                        echo "Wrong email Id";
                    }
                }
            }
        ?>
    </div>
    </div>
</body>
</html>