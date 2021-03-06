<?php
session_start();
include '../../config/db_con.php';
if(!isset($_SESSION['User_Name'])){
    header("location: ../../index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/contact.css">
   <title>
online tutor
   </title> 
</head>
<body>
	<!-- start header-->
	<div class="header">
		<div class="nav-logo">
			<a href="../tuteehome.php"><img src="../../Logo/logo.jpeg" width="50px" title="YMARU Home"></a>
		</div>

		<div>
			<button class="mobile-menu-toggle">
				<img src="../../Images/ymaru-menu-icon.svg">
			</button>
		</div>

		<div class="nav-links">
			<ul aria-expanded="false">
				<li>
					<a href="../tuteehome.php">Home</a>
				</li>
				<li>
					<a href="about us.php">About us</a>
				</li>
				<li>
					<a href="reportpage.php">Catalogue</a>
				</li>
				<li>
					<a href="logout.php">Log out</a>
				</li>
			</ul>
		</div>
	</div><!--end header-->
		
	<div style="clear: left;"></div>
	<div class="top-image">
		<!--Background image form css here-->
	</div>
	<div class="warrper">
		<div class="title">
			<h1>Our Offices</h1>
			<hr style="color: white; width: 200px; height: 3px; margin: 0 auto;">
		</div>
		<div class="office-locations">
			<div class="office addis">
				<div class="office-image">
					<img src="../../Images/Addis Abeba.jpeg" alt="addis ababa city image" >
				</div>
				<div class="office-name">
					<h2>Addis Abeba</h2>
				</div>
			</div>
			<div class="office hawassa">
				<div class="office-image">
					<img src="../../Images/Hawassa.jpg" alt="Hawwasa city image" >
				</div>
				<div class="office-name">
					<h2>Hawassa</h2>
				</div>
			</div>
			<div class="office debrezeit">
				<div class="office-image">
					<img src="../../Images/Debre zeit.jpg" alt="Debre zeit cityimage" >
				</div>
				<div class="office-name">
					<h2>Debre Zeit</h2>
				</div>
			</div>
			<div class="office adama">
				<div class="office-image">
					<img src="../../Images/Adama.jpg" alt="Adama city image" >
				</div>
				<div class="office-name">
					<h2>Adama</h2>
				</div>
			</div>
		</div><!--End of office locations-->
          
				<div class="bodypart">
					<h1> Contact Us</h1>
					<form id="form" name="myform" action="" method="post">
						<!-- <div class="radioin"><input type="radio" name="registerAs" id="student" value="student">
							<label>Student</label>
						</div>
						<div class="radioin"><input type="radio" name="registerAs" id="tutor" value="tutor">
							<label>Tutor</label>
						</div> -->
						<div class="form-control">
							<label>FullName</label>
							<input type="text" placeholder="sdff" id="fullname">
							<i class="fas fa-check-circle"></i>
							<i class="fas fa-exclamation-circle"></i>
							<small> Error message</small>
						</div>
						<div class="form-control">
							<label>Email</label>
							<input type="email" name="email" placeholder="sdff" id="email">
							<i class="fas fa-check-circle"></i>
							<i class="fas fa-exclamation-circle"></i>
							<small> Error message</small>
						</div>
						<div class="form-control">
							<label>Message</label>
							<input type="textarea" name="text" id="message" required>
							<i class="fas fa-check-circle"></i>
							<i class="fas fa-exclamation-circle"></i>
							<small> Error message</small>
						</div>
						
						<button type="submit" name ="submit" id="btn">Send Message</button>
					</form>
				</div>
				    		
		<!-- End Contact us form-->
	</div><!--End of wrapper-->
    <?php
    if(isset($_POST['email']) && isset($_POST['submit'])){

    $email=$_POST['email'];
    $description=$_POST['text'];


    
    $to= "sahilugetachew19@gmail.com";
    $subject="Ymaru User With Email:$email Sent You a Message";
    $message="$description";
    $headers="From:$email \r\n";
    $headers.="MiME-Version:1.0"."\r\n";
    $headers.="content-type:text/html;charset=UTF-8"."\r\n";
 
    $send=mail($to,$subject,$message,$headers);
    if($send)
    {
        echo
        "
        <script>
          alert('Email sent to Ymaru');
          
        </script>
        ";
        // echo "<br>Records added successfully.";
        // echo "We have sent You a verification code to your email account to verify it's you.<br>";
        // echo "Check your email";
        // header('location:http://localhost/index.php');
    }
    else
    {
        echo
        "
        <script>
          alert('Email not sent');
          
        </script>
        ";
    }
}
    ?>
<!-- Start Footer -->
    <div class="footer">
        <div class="footer-lists">
            <div class="footer-logo-link">
                <div class="ymaru-logo">
                    <a href="ymaru_home.html"><img src="../Logo/logo.jpeg" width="60" height="60" title="YMARU Home"></a>
                </div>
                <div class="ymaru-text">
                    <p><a href="ymaru_home.html"><span>YMARU</span> Online Course &amp; Tutor</a></p>
                </div>
            </div>
            <div class="social-medias">
                <p>Follow Us On</p>
                <ul>
                    <li><a href="http://facebook.com" target="_blank"> <img src="../../Images/facebook.png">
                            <font face="arial">Facebook</font>
                        </a></li>
                    <li><a href="http://twitter.com" target="_blank"> <img src="../../Images/twitter.png">
                            <font face="arial">Twitter</font>
                        </a></li>
                    <li><a href="http://instagram.com" target="_blank"> <img src="../../Images/instagram-square.jpg">
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
<script src="../JS/contact.js"></script>
<script>

	const mobileMenu = document.querySelector('[aria-expanded]');
        const navToggle = document.querySelector('.mobile-menu-toggle');
        navToggle.addEventListener("click", function(){
            const isOpened = mobileMenu.getAttribute("aria-expanded");
            if(isOpened === "false"){
                mobileMenu.setAttribute('aria-expanded', true);
            } 
            else if(isOpened === "true"){
                mobileMenu.setAttribute('aria-expanded', false);
            }
        })
</script>
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
    .header{
        width: 100%;
        padding: 1% 1.5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(-45deg, #082032, #2b6777 , #2b6777, #2b6777 );
        background-size:100% 100%;
        position: relative;
        animation: change 10s ease-in-out infinite;
        position: sticky;
        top: 0;
        z-index: 1;
    } 
        
            .fill {
                background-color: #c8d8e4;
                border-bottom: 1px solid #f0f0f0;
                padding: 20px 40px;
        
        
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
        
            .form-control input {
                border: 2px solid #f0f0f0;
                border-radius: 4px;
                background: #c8d8e4;
                display: block;
                font-family: inherit;
                font-size: 14px;
                padding: 10px;
                width: 100%;
        
            }
        
            .form-control select {
                border: 2px solid #f0f0f0;
                border-radius: 4px;
                background: #c8d8e4;
                display: block;
                font-family: inherit;
                font-size: 14px;
                padding: 10px;
                width: 100%;
        
            }
        
            nav ul {
                background: linear-gradient(-45deg, #082032, #2b6777, #2b6777, #2b6777);
                background-size: 100% 100%;
                position: relative;
                animation: change 10s ease-in-out infinite;
                width: 100%;
                margin-top: 10px;
                display: flex;
                list-style: none;
                vertical-align: middle;
            }
        
            nav ul li a {
                line-height: 80px;
                padding: 12px 30px;
                text-decoration: none;
                font-size: 14px;
                font-weight: bold;
                font-family: Arial, Helvetica, sans-serif;
                text-transform: uppercase;
                color: #fff;
            }
        
            nav ul li a:hover {
                background: rgba(0, 0, 0, .7);
                border-radius: 6px;
            }
        
            nav.sticky {
                position: fixed;
                top: 0;
                left: 0;
                background: linear-gradient(-45deg, #082032, #2b6777, #2b6777, #2b6777);
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        
            .body {
                margin-bottom: 30px;
            }
        
            .title {
                text-align: center;
                width: 100%;
                margin-bottom: 50px;
            }
        
            .title h1 {
                font-size: 2.5em;
                color: transparent;
                background-image: linear-gradient(-45deg, #47131c, #162e2e);
                background-clip: text;
                -webkit-background-clip: text;
                z-index: -1;
            }
        
            button[type="submit"] {
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
        
            button[type="submit"]:hover {
        
                border-color: #2b6777;
                transition: .5s;
            }
            @media screen and (max-width: 900px){
        .warrper{
            margin-left: 6%;
            margin-right: 6%;
        }
        .office-locations .office .office-image img{
            height: 450px;
        }
        .fill{
            width: 70%;
        }
        .form-wrapper{
            width: 70%;
        }
    }
    @media screen and (max-width: 700px){
        .header{
            padding-inline-start: 2%;
            padding-inline-end: 3%;
        }
        .header .nav-logo img{
            width: 60px;
        }
        .mobile-menu-toggle{
            display: block;
        }
        .header .nav-links{
            position: absolute;
        }
        .header .nav-links ul{
            position: fixed;
            flex-direction: column;
            align-items: flex-start;
            background: linear-gradient(-45deg, #082032, #2b6777, #2b6777, #2b6777 );
            background-size:100% 100%;
            right: 0;
            top: 80px;
            height: calc(100vh - 80px);
            width: 300px;
            margin-right: -300px;
            padding-top: 2rem;
            opacity: .5;
            transition: all 600ms;
        }
        .nav-links ul li{
            width: 100%;
        }
        .nav-links ul li a{
            line-height: 40px;
            float: left;
        }
        .nav-links ul li:hover{
            background-color: rgba(255,255,255,.3);
        }
        .nav-links ul li a:hover{
            background-color: transparent;
            color: #c9c1c1;
        }
        .nav-links ul[aria-expanded="true"]{
            opacity: 1;
            margin-right: 0;
        }
        .warrper{
            margin-left: 4%;
            margin-right: 4%;
        }
        .office-locations .office .office-image img{
            height: 360px;
        }
        .fill{
            width: 55%;
        }
        .form-wrapper{
            width: 55%;
        }
    }
</style>


</body>
</html>
