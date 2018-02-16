<head>
<title>Travel</title>

<style>
  body
{
  background-size: 100%;
}
  #video
{
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100;
  width:auto;
  height: auto;
  z-index:-100;
}
.homepage
{
  font-size:30px;
  background-color: rgba(240,240,240,.2);
  margin-left: -10px;
  margin-top:-10px;
  margin-right:-10px; 
  padding:25px;
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


</style>
<body >
<video autoplay loop id="video" plays-inline>
	<source src="images/travel1.mp4" type"video/mp4">
	</video>
<div class="homepage">
	<a  class="home" href="homepage.php">HOME</a>
	<div class="option" >
		<a href="about.php">About</a>
		<a href="contact.php">Contact Me</a>
		<a href="login.php">Login</a>
        <a href="register2.php">Register</a>
 	
	</div>
</div>
</body>

</head>