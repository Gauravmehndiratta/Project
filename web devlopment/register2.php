<?php
require_once'connect.php';
?>
<!doctype html>
<html>
<head>
   
<title>Register Form</title>

<style> 
body{
   background-image: url(images/register.jpg);
   background-size: cover;
}
.homepage
{
  font-size:30px;
  background-color: rgba(240,240,240,.2);
  margin-left: -10px;
  margin-top:-10px;
  margin-right:-10px; 
  padding:16px;
  color:white;
}
.option
{
   float:right;
}
.home
{
  color:white;
  text-decoration: none;
  font-style: italic;
  font-weight: bold;
}
.option a
{
  text-decoration: none;
  color:white;
  padding: 10px;
  font-style:oblique; 
  font-weight: bold;
}
.option a:hover
{
  background-color: slateblue;
  padding:30px 10px 17px 9px;
}
.option a:active
{
  background-color:pink;
  text-decoration: underline;
}
.home:hover
{
  
  background-color: slateblue;
  padding:30px 10px 18px 9px;
}
.home:active
{
  background-color:pink;
  text-decoration: underline;

}


.reg {
  width:30%;
  height:490px;
  background-color:rgba(0,0,0,0.1);
  color:#fff; 
  top:55%;
  left:50%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing:border-box;
  padding:15px;
  padding-bottom: 20px;
}
.reg input[type="text"],input[type="password"],input[type="phone no"]
{
  width:100%;
  border:none;
  margin-bottom:18px;
  border-bottom:1px solid red;
  background:transparent;
  outline:none;
  height:18px;
  color:#fff;
  font-size:16px;
  padding:0;}

  .reg input[type="submit"]{
  width: 100%;
  height: 30px;
  border:none;
}
.reg input[type="submit"]:hover{
  background:#ffC107;
  color:#000;

}
</style>
<body>
  <div class="homepage">
  <a  class="home" href="homepage.php">HOME</a>
  <div class="option" >
    <a href="about.php">About</a>
    <a href="contact.php">Contact Me</a>
    <a href="login.php">Login</a>
    <a href="register2.php">Register</a>
  
  </div>
  </div>
    <h1 style="color:red; text-transform:uppercase; font-size:25px; font-style:italic; text-align:center; padding-top:5px; font-weight:bold; margin-top:0px;"> Register Here</h1>
    <div class="reg">
        <form action="./register2.php" method="post">
            <p style="color:red;">Full Name</p>
            <input type="text" name="name"  value="" placeholder="Enter your name"/>
            <p style="color:red;">Username</p>
            <input type="text" name="username" value="" placeholder="Enter your username"/>
            <p style="color:red;">Gender</p>&nbsp&nbsp 
            <input type="radio" name="gender" value="Male" /><a style="color:red;">Male</a> &nbsp&nbsp&nbsp&nbsp 
            <input type="radio" name="gender" value="Female"/><a style="color:red;">Female</a> <br><br>
            <p style="color:red;">Password</p>
            <input type="password" name="password" placeholder="enter password"/>
            <p style="color:red;">Phone </p>
            <input type="text" name="ph" value="" placeholder="phone no"/> 
            <input style="cursor:pointer; color:black;" type="submit" name="Register" value="Register "/><br><br>
            <a style="text-decoration:none; margin-left:34%; color:white;font-size:18px;line-height:20px;" href="#">
                Forgot password ?
            </a>
        </form>
      </div>
          <?php 
        $name = $user = $gender = $pass = $phone = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
               if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
        }else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["username"])) {
        $userErr = "username is required";
        }
        else {
        $user = test_input($_POST["username"]);
        }
        if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        }
        else {
        $gender = test_input($_POST["gender"]);
        }
        if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        }
        else {
        $pass = test_input($_POST["password"]);
        }
        if (empty($_POST["ph"])) {
        $phoneErr = "Phone is required";
        } 
        else {
        $phone = test_input($_POST["ph"]);
        }

       $sql ="INSERT INTO `tabel1` (fullname,username,gender,password,phone) values ('$name','$user','$gender','$pass','$phone')";              
  
  if($con-> query ($sql) === TRUE)
{     
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}
    
       function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
</body>
</html>