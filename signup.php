<?php 
$success=0;
$user=0;


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


$sql="select * from `registration` where 
username='$username'";
 $result=mysqli_query($con,$sql);

 if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
    // echo "User Alredy Exist";
    $user=1;
  }else{
    $sql="insert into `registration`(username,password)
 values('$username','$password')";
$result=mysqli_query($con,$sql);
    if($result){
      //  echo "Signup Successfully";
      $success=1;
    }else{
       die(mysqli_error($con));
    }
  }
}
}



?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Login Page with Username and Password Example</title>
    <link href="loginstyle.css" rel="stylesheet"><link rel="stylesheet" href="./style.css">
  <style>
    .w3-large{
    background-color: lightgrey;
    width: 300px;
    border: 15px solid green;
    padding: 50px;
    margin: 20px;
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
  </style>
  </head>
  <body >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  <?php
  if($user)
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>OOH SORRY!!</strong> This User Alredy Exists.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'?>
  <?php

  if($success)
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>YESSS</strong> You Have Successfully Signed Up.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
  


  ?>
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
                            <li><a href="http://127.0.0.1:5500/indexx.html#">50% Off</a></li>
                            <li><a href="http://127.0.0.1:5500/indexx.html#">30% Off</a></li>
                            <li><a href="http://127.0.0.1:5500/indexx.html#">20% Off</a></li>
                          </ul>
                  
                  
                  </div></li>
                    <li><a href="">Login</a></li>
                  </ul>
          </div></li>
  
          <li><a href="http://127.0.0.1:5500/indexx.html#">Loan</a>
              <div class="sub_menu1">
                  <ul>
                    <li><a href="http://127.0.0.1:5500/indexx.html#">50% Off</a></li>
                    <li><a href="http://127.0.0.1:5500/indexx.html#">30% Off</a></li>
                    <li><a href="http://127.0.0.1:5500/indexx.html#">20% Off</a></li>
                  </ul></div></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="http://127.0.0.1:5500/indexx.html#">Accounts</a></li>
          <li><a href="aboutus.html">About us</a></li>
      </ul>
      </div>
  
    <div class="align">
    <div class="grid">
  
      <form action="signup.php" method="POST" class="form login">
  
        <div class="form__field">
          <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
          <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required="">
        </div>
  
        <div class="form__field">
          <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required="">
        </div>
  
        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>
  
      </form>
  
      <!-- <p class="text--center">Not a member? <a href="#">Sign up now</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p> -->
  
    </div>
  </div>
  
    <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"></path></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"></path></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"></path></symbol></svg>
  
  
  
    
  
  
  </body></html>