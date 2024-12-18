<?php
$showerror="false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
   //include '_database.php';
   include '_dbconnect.php';
   $user_email=$_POST['signupemail'];
   $pass=$_POST['password'];
   $cpass=$_POST['cpassword'];
   
   $existsql="select * from user where user_email='$user_email'";
   $result=mysqli_query($conn,$existsql);
   $numrows=mysqli_num_rows($result);
   if($numrows>0)
   {
    $showerror="Email already exist";
   }
   else{
    if($pass==$cpass)
    {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $sql="INSERT INTO `user` ( `user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        $showerror=true;
        header("Location:/forum/index.php?signupsuccess=true");
        exit();
      }
    }
    else{
      $showerror="password not matched";
    }
   }
  // header("Location:/forum/index.php?signupsuccess=false&error=$showerror");
}
?>