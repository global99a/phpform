<?php include("config.php") ?>
<h1>Here we are inserting data</h1>

<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['city']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];
    $insertquery=mysqli_query($connection,"INSERT INTO `pallavi`(`name`, `email`, `gender`,`dob`,`city`) VALUES ('".$name."' , '".$email."', '".$gender."','".$dob."','".$city."')");
    if($insertquery)
    {
        echo 1;
        header("Location: index.php");
    }
    else{
        header("Location: form.php");
    }
}

else{
    echo 0;
}
?>


















 







<!-- <?php include('config.php');?>
<h1>Here we are inserting users</h1>

/* <?php


if(isset($_GET['user_name']) && isset($_GET['phone']))
{

    $name=$_GET['user_name'];
    $phone=$_GET['phone'];

    $insertquery=mysqli_query($connection,"INSERT INTO `users`(`name`, `phone`) VALUES ('".$name."','".$phone."')");
if($insertquery)
{
    echo 1;
header("Location: index.php");
}
else
{
header("Location: form.php");

}
}
else
{
    echo '0000';
}
?> */ -->