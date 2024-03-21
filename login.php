<?php 
// $success=0;
// $user=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php'; 
$username=$_POST['username'];
$password=$_POST['password'];

// $sql="insert into `registration`(username,password) 
// values('$username','$password')";

// $result=mysqli_query($con,$sql);

// if($result){
//   echo "Data Inserted Successfully";
// }else{
//   die(mysqli_error($con));
// }
// }


$sql="select * from `registration` where username='$username'
and password='$password' ";
 $result=mysqli_query($con,$sql);

 if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
     echo "Login Successful.";
    $user=1;
    }else{
        echo "Login Failed";
    }}}
//   }else{
//     $sql="insert into `registration`(username,password)
//  values('$username','$password')";
// $result=mysqli_query($con,$sql);
//     if($result){
//       //  echo "Signup Successfully";
//       $success=1;
//     }else{
//        die(mysqli_error($con));
//     }
//   }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
    padding:0;
    margin:0;
    box-sizing: border-box;
    

}

body{
    /* background-image:url("https://img.freepik.com/premium-photo/old-stone-texture-background-toned-classic-blue-color_107210-688.jpg"); */
    background-repeat: no-repeat;
       background-color:#ffffff;
    /* background-image: url('download.jpg'); */
    background-size: cover;
    background-position: center;
        font-family: sans-serif;
    
}

.menu1{
    background-color:rgb(172, 49, 49);

    text-align: center;
}
.menu1 ul{

    display: inline-flex;
    list-style: none;;
    color: rgb(172, 49, 49);
}
.menu1 ul li{

    width: 120px;
    margin: 15px;
    padding: 15px;
}
.menu1 ul li a {
    text-decoration: none;
    color: #ffffff;

}

.sub_menu1 {
    display: none;
}

.menu1 ul li:hover .sub_menu1 
{   display: block;
    position: absolute;
    background: rgb(172, 49, 49);
    margin-top: 15px;
    margin-left:-15px; ;
}
.menu1 ul li:hover .sub_menu1 ul{
    display: block;
    margin: 10px;
}

.menu1 ul li:hover .sub_menu1 ul li{
   width: 150px;  
   padding: 10px;
  
   border-bottom: 1px solid #fff;
   background: transparent;
   border-radius: 0;
   text-align: left;
}
.menu1 ul li:hover .sub_menu1 ul li :first-child {
    border-top: 1px solid #fff;
    }


.right_drop:hover .sub_menu2 {
    position: absolute;
    display: block;
    margin-top: -40px;
    margin-left: 140px;
    background: rgb(172, 49, 49);
}
.sub_menu2{
    display: none;
}
 
.center{

        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 50%;
}
 .hello {
    font-size: larger;
 }



        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ef461b;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    

        .switch-form {
            text-align: center;
        }

        .switch-form a {
            text-decoration: none;
            color: #ef461b;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="menu1">
        <ul>
            
            <li class="hower"><a href="index.html"><class="w3-large"><i class="fa fa-home"></i></a></li>
            
            <li><a href="banking2.html"> <i class='fa fa-user'></i> User</a>
                <div class="sub_menu1">
                    <ul>
                      <li class="right_drop"><a href="http://127.0.0.1:5500/indexx.html#"></a><i class="fa fa-angle-right"></i>
                        <div class="sub_menu2">
                            <ul>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">Men</a></li>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">Login</a></li>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">About Us</a></li>
                            </ul>
                    
                    </div></li>
                      <li class="right_drop"><a href="http://127.0.0.1:5500/indexx.html#"></a>
                        <div class="sub_menu2">
                            <ul>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">12pcpa </a></li>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">14pcpa </a></li>
                              <li><a href="http://127.0.0.1:5500/indexx.html#">10.5pcpa </a></li>
                            </ul>
                    
                    
                    </div></li>
                      <li><a href="">Login</a></li>
                    </ul>
            </div></li>
    
            <li><a href="http://127.0.0.1:5500/indexx.html#">Loan</a>
                <div class="sub_menu1">
                    <ul>
                      <li><a href="http://127.0.0.1:5500/indexx.html#">business Loan</a></li>
                      <li><a href="http://127.0.0.1:5500/indexx.html#">Car Loan</a></li>
                      <li><a href="http://127.0.0.1:5500/indexx.html#">Home Loan</a></li>
                    </ul></div></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="account.html">Accounts</a></li>
            <li><a href="aboutus.html">About us</a></li>
        </ul>
        </div>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST" class="form login">
        <form id="login-form" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="switch-form">
            Don't have an account? <a href="signup.php" id="signup-link">Sign Up</a>
        </div>
    </div>



</body>
</html>
