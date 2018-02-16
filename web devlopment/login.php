<html>
<head><title>Login</title>

 <style>

   .homepage
{
	font-size:30px;
	background-color: rgba(240,240,240,.2);
	margin-left: -10px;
	margin-top:-10px;
	margin-right:-10px; 
	padding:25px;
	
}
   .option 
{
   float: right;
}
  .option{
 	float:right;
}
  .home
{
  	color:white;
  	font-style: italic;
  	font-weight: bold;
  	text-decoration:none;
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
 	padding:30px 10px 24px 9px;
}
  .option a:active
{
 	background-color:pink;
 	text-decoration: underline;
 }
  .home:hover
{
   background-color: slateblue;
   padding:30px 10px 24px 9px;
}
  .home:active
{
    background-color:pink;
 	text-decoration: underline;
}
   body 
{
   margin:0px; 
   background-image: url(images/login.jpg);
   background-size:cover;
}
  .title
{
 
   text-align:center;
   padding:50px ;
}
  .title h1
{

  margin:0;
  padding: 0;
  color:slateblue; 
  text-transform: uppercase;
  font-size: 40px;
}


</style>
 
</head>
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
<h1 style="margin-left:42%; margin-top:1%; padding:20px; color:skyblue; ">Sign In</h1>
<div style="width:40%; height:350px; background:#fff; background-color:rgba(0,0,0,0.1);margin:top-20px ; margin-left:400px; border: 0px solid; " >
		<form style="padding-top:20px;">
			<p style="color:white; font-size:25px; margin-left:40px;"><b>Username</b></p>
			<input style="float:right; margin-right:50px; margin-top:-50px; background:transparent;" type="text"  name="" placeholder"Online" />
			<p style="color:white; font-size:25px; margin-left:40px;"><b>Password</b></p>
            <input style="float:right; margin-right:50px; margin-top:-45px; background:transparent;" type="password"  name="" placeholder"******" /><br><br><br>

            <input id="sign_in" style=" margin-left:50px; width:80%;  padding:10px; color:white;background:transparent;font-size:20px; "type="submit"  name=""  value="Sign In" placeholder"" /><br><br>
            <a style="margin-left:220px; color:white;" href="">Forgot password ?</a>
        </form>

</div>




</body>
</html>