<?php
include 'config/db_con.php';
session_start();
if(isset($_GET['vkey'])){
  $vkey=$_GET['vkey'];
  //echo "$vkey";
  $sql="SELECT VKey,verify FROM personaldb WHERE VKey='$vkey' AND verify=0";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) >0){
	 // echo sweetAlert("here", "vkey", "is set");
    $sql="UPDATE personaldb SET verify=1 WHERE VKey='$vkey'";
    mysqli_query($conn, $sql);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Mesekir">
	<meta name="title" content="YMARU online course and tutor login page">
	<meta name="description" content="Login to access your profile and continue learning.">
	<mata name="keywords" content="YMARU online education login page distance learning ethiopian study home">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="shortcut icon" href="Logo/logo.jpeg">
   <title>Login YMARU</title> 
</head>
<body>
	<div class="header">	
			<div class="header-logo">
				<a href="index.php"><img src="Logo/logo.jpeg" alt="Website logo YMARU" width="170" height="170"></a>
			</div>
			<div class="title">
				<font size="5" color="white" face="arial">
					<h1>YMARU Online Course And Tutor</h1>
				</font>
			</div>
	</div>
	<div style="clear: left;"></div>

	<div class="warrper">
		<div class="bodypart" >
           	<h1>Login</h1> 
			<form id="form" name="myform" method="post" action="php/Pages/signin.php" >
				<!-- <div class="radioin"><input type="radio" name="registerAs" id="student" value="student">
					<label>Student</label>
				</div>
				<div class="radioin"><input type="radio" name="registerAs" id="tutor" value="tutor">
					<label>Tutor</label>
				</div> -->
				<!-- <div class="form-control">
					<label>username</label>
					<input type="text" placeholder="sdff" name="username" id="username">
					<i class="fas fa-check-circle"></i>
					<i class="fas fa-exclamation-circle"></i>
					<small> Error message</small>
				</div> -->
				<div class="form-control">
					<label><br>Email</label>
					<input type="email" placeholder="" name="email" id="email">
					<i class="fas fa-check-circle"></i>
					<i class="fas fa-exclamation-circle"></i>
					<small> Error message</small>
				</div>
				<div class="form-control">
					<label>Password</label>
					<input type="password" name="password" id="password">
					<i class="fas fa-check-circle"></i>
					<i class="fas fa-exclamation-circle"></i>
					<small> Error message</small>
				</div>
				<div class="forgot-pwd">
					<p><a href="php/Pages/forgotemail.html">Forgot password?</a></p>
				</div>
				<div class="create-acc">
					<p><a href="php/Pages/signup.html">Create Account.</a></p>
				</div>
				<button type="submit" id="btn" >Log in</button>
			</form>	
        </div>
	</div><!--wrapper end-->
	<div style="clear: left;"></div>

	    <div class="footer">
        <div class="footer-lists">
            <div class="footer-logo-link">
                <div class="ymaru-logo">
                    <a href="index.php"><img src="Logo/logo.jpeg" width="60" height="60" title="YMARU Home"></a>
                </div>
                <div class="ymaru-text">
                    <p><a href="index.php"><span>YMARU</span> Online Course &amp; Tutor</a></p>
                </div>
            </div>
            <div class="social-medias">
                <p>Follow Us On</p>
                <ul>
                    <li><a href="http://facebook.com" target="_blank"> <img src="Images/facebook.png">
                            <font face="arial">Facebook</font>
                        </a></li>
                    <li><a href="http://twitter.com" target="_blank"> <img src="Images/twitter.png">
                            <font face="arial">Twitter</font>
                        </a></li>
                    <li><a href="http://instagram.com" target="_blank"> <img src="Images/instagram-square.jpg">
                            <font face="arial">Instagram</font>
                        </a></li>
                   
                </ul>
            </div>
            <div class="contacts">
                <p>Get in Touch</p>
                <ul>
                    <li>Phone: +251 9123 456 789</li>
                    <li>Fax: ....</li>
                    <li>Email: <a href="mailto:mesekirgetch@gmail.com">ymaru@edu.com</a></li>
                </ul>
            </div>
            
        </div>

        <div class="footer-bottom">
            <div class="privterm">
                <a href="privacy.html">
                    <font face="arial">Privacy</font>
                </a>
                <a href="terms.html">
                    <font face="arial">Terms of Use</font>
                </a>
            </div>
            <div class="copyright">
                <p>Copyright &copy; YMARU 2022, All Rights Reserved</p>
            </div>
        </div>
    </div>
	<!-- <script src="../JS/tuteeP.js"></script>
	<script src="../JS/signup.js"></script>
	<script src="../JS/login.js"></script> -->
    <style>
        body{
        font-family: sans-serif;
        width: 100%;
        height: 100%;
        color: #fff;
        background: linear-gradient(-45deg, #52ab98, #52ab98 , #52ab98, #52ab98 );
        background-size:400% 400%;
        position: relative;
        animation: change 10s ease-in-out infinite;
        }
        @keyframes change {
        0%{
            background-position: 0 50%;
        }
        50%{
            background-position: 100% 50%;
        }
        100%{
            background-position: 0 50%;
        }
        }

        .warrper{
        margin-left:8%;
        margin-right:8%;
        }

        .header{
        width: 100%;
        height: 80vh;
        }
        nav{
        text-align: center;
        width: 100%;
        padding: 20px 0;
        }
        .logo{
        width:150px;
        margin: 20px;
        border-radius: 50%;
        cursor: pointer;
        }
        .warrper .bodypart{
        min-width: 400px;
        background:#c8d8e4 ;
        border-radius: 10px;
        padding: 30px;
        margin: 4rem auto;
        }
        form button {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #2b6777;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        }
        form button:hover {
        border-color: #2b6777;
        transition: .5s;
        }
        .form-control input{
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        background: #c8d8e4;
        display: block;
        font-family: inherit;
        font-size: 14px;
        padding: 10px;
        width: 100%;
    
        }
        nav ul{
        background: linear-gradient(-45deg, #082032, #2b6777 , #2b6777, #2b6777 );
        background-size:100% 100%;
        position: relative;
        animation: change 10s ease-in-out infinite;
        width: 100%;
        margin-top: 10px;
        display: flex;
        list-style: none;
        vertical-align: middle;
        }
        nav ul li a{
        line-height: 80px;
        padding: 12px 30px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        color: #fff;     
        }
        nav ul li a:hover{
        background: rgba(0, 0, 0, .7);
        border-radius: 6px;
        }

        nav.sticky{
        position: fixed;
        top: 0;
        left: 0;
        background: linear-gradient(-45deg, #082032, #2b6777 , #2b6777, #2b6777 );
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .body{
        margin-bottom: 30px;    
        }
        .title{
        text-align: center;
        width: 100%;
        margin-bottom: 50px;    
        }
        .title h1{
        font-size: 2.5em;
        color: transparent;
        background-image: linear-gradient(-45deg, #47131c , #162e2e);
        background-clip: text;
        -webkit-background-clip: text;
        z-index: -1;
        }
    </style>
</body>
</html>
