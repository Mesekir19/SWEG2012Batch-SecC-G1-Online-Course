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
    <meta name="author" content="Mesekir">
  	<meta name="title" content="About YMARU online course and tutor">
	  <meta name="description" content="YMARU is an Ethiopian online learning platform aimed at providing education with excellence.">
	  <mata name="keywords" content="YMARU online education distance learning ethiopian study home">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/aboutus.css">
    <link rel="stylesheet" href="../../css/catalogue.css">
    <link rel="shortcut icon" href="../../Logo/logo.jpeg">
    <title>About us</title>
</head>
<body>
  <!-- start header-->
  <div class="header">
    <div class="logo">
        <a href="../tuteehome.php"><img src="../../Logo/logo.jpeg" width="60px"></a>
    </div>
    
    <div class="menu-icon-div">
      <button class="mobile-menu-toggle">
        <img src="../../Images/ymaru-menu-icon.svg" width="40">
      </button>
    </div>

    <div class="nav-links">
        <ul aria-expanded="false">
            <li>
              <a href="../tuteehome.php">Home</a>
            </li>
            <li>
              <a href="reportpage.php">Catalogue</a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
            <li>
              <a href="logout.php">Log out</a>
            </li>
        </ul>   
    </div>
  </div><!--end header-->

  <div style="clear: left;"></div>

  <div class="warrper">
    <div class="body">
      <div class="mainabout">
          <div class="image">
            <img src="../../Images/R.png" alt="Question mark icon" width="150px" height="150px" />
          </div>
          <div class="about">
            <div class="about-title">
              <h1>About Us</h1>
            </div>
            <div class="about-content">
              <p class="center">YMARU</p>
              <p>Our website will provide a connection/link between a person who wants to learn/gain knowledge and a person who want to give/share their knowledge and experience on what the specialized on.</p>
              <details>
                <summary class="read-more">Read more</summary>
                <p>
                  YAMRU's mission is to create new possibilities for people everywhere by connecting them to the
                  knowledge and skills they need to succeed in a changing world.<br>
                  
                  Fueled by the YAMRU marketplace, YAMRU Business helps people achieve critical business outcomes and stay competitive
                  by offering fresh, relevant, and personalized on-demand learning. The YAMRU  subscription is a curation of
                  top-rated courses taught by real-world experts from the YAMRU marketplace. Our content covers key business and technical
                  topics ranging from development and IT to leadership, marketing, design, stress management, and much more. In addition
                  to a curated content collection, we offer a platform to drive effective learning as well as tools for leaders to host
                  and distribute their own proprietary content.
                </p>
              </details> 
            </div>         
          </div>
      </div><!--end mainabout-->
                
      <div style="clear: left;"></div>
      <!-- Start what else -->
      <div class="mainWhatElse">
        <div class="whatelse">
          <h3>What Else?</h3>
        </div>
        <div class="card-container">
          <div class="web card">
            <div class="card-img">
              <img src="../../Images/browser-512x512-433814.png" alt="Browser image" width="100" height="100" />
            </div>
            <div class="card-content">
              <h2>Web Development</h2>
              <p>While developing this website, we have faced different problems as a team and individual wise. Through this journey we have learned many things and gained a huge experience.</p>
            </div> 
          </div>
          <div class="rdesign card">
            <div class="card-img">
              <img src="../../Images/reply-512x512-433860.png" alt="Reply image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Responsive Design</h2>
              <p>This website is compatible with any device. Enjoy the efforts we made to make this website possible.</p>
            </div> 
          </div>
          <div class="cdesign card">
            <div class="card-img">
              <img src="../../Images/medal-512x512-433843.png" alt="Medal image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Creatative Design</h2>
              <p>We tried to make this website interesting to be visited again and again. So that, our clients come back eagerly. </p>
            </div> 
          </div>
          <div class="clean card">
            <div class="card-img">
              <img src="../../Images/create-512x512-433822.png" alt="Create image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Clean Code</h2>
              <p>The code used to builed this site is very precise and easy to undrestand.</p>
            </div> 
          </div>
          <div class="support card">
            <div class="card-img">
              <img src="../../Images/users-512x512-433879.png" alt="Users image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Fast Support</h2>
              <p>We are ready and on spot to help you with any difficulties that you have faced using this site.</p>
            </div> 
          </div>
          <div class="brand card">
            <div class="card-img">
              <img src="../../Images/shopping-512x512-433867.png" alt="Shoping image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Branding Identity</h2>
              <p>We have our own logo that you can easily remember and immediatly recognize incase you forget.</p>
            </div> 
          </div>
        </div>               
      </div>
      <!-- End What Else? -->
      <div style="clear: left;"></div>

      <div class="card-container ourValues">
        <div class="value card">
          <div class="card-content">
            <p>Our <br>Company <br>Values</p>
          </div>
          <div class="card-img">
            <img src="../../Images/company.png" alt="Hand image" width="200" height="200">
          </div>
        </div>   
        <div class="side-values-box">
          <div class="trans card">
            <div class="card-img">
              <img src="../../Images/volume-512x512-433883.png" alt="voice mike image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Transparency</h2>
              <p>Openness with our team and clients. All our actions are clear and legal.</p>
            </div> 
          </div>
          <div class="commit card">
            <div class="card-img">
              <img src="../../Images/user-512x512-433878.png" alt="user image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Commitment</h2>
              <p>Our word and hard work over everything else. Our clients and vision are our guiding beacons.</p>
            </div> 
          </div>
          <div class="self card">
            <div class="card-img">
              <img src="../../Images/reader-512x512-1214449.png" alt="reader user image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Self Improvement</h2>
              <p>Never stop learning, evolving to who we want to become and where we want to be.</p>
            </div> 
          </div>
          <div class="over card">
            <div class="card-img">
              <img src="../../Images/location-512x512-433839.png" alt="location jet image" width="100" height="100">
            </div>
            <div class="card-content">
              <h2>Over Deliver</h2>
              <p>Deliver more values than our team and clients expect. Every day, over every delivery. </p>
            </div> 
          </div>
        </div>
      </div><!--End of ourValues--> 
    </div><!--End of class body-->
  </div><!--End of warrper-->
  <div style="clear: left;"></div>

      <div class="footer">
        <div class="footer-lists">
            <div class="footer-logo-link">
                <div class="ymaru-logo">
                    <a href="../tuteehome.php"><img src="../../Logo/logo.jpeg" width="60" height="60" title="YMARU Home"></a>
                </div>
                <div class="ymaru-text">
                    <p><a href="../tuteehome.php"><span>YMARU</span> Online Course &amp; Tutor</a></p>
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
  <script>
    /*Mobile nav menu toggle*/
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