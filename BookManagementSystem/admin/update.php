<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"randhir");
    $query = "update admins set name='$_POST[address]',email='$_POST[email]',
    mobile='$_POST[mobile]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address'];
    }
?>
<script type="text/javascript">
    alert("Updated successfully....");
    window.location.href="admin_dashboard.php";
</script>