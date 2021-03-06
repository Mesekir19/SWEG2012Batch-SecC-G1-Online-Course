<?php
session_start();
include '../config/db_con.php';
if(!isset($_SESSION['User_Name'])){
    header("location: ../index.php");
    die();
}
unset($_SESSION['Fetched_Username']);


        // $retrivedCourse_id=$row['course_id'];
$UserN=$_SESSION['User_Name'];        
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mesekir">
    <meta name="title" content="YMARU online course and tutor">
    <meta name="description"
        content="YMARU is an Ethiopian online learning platform aimed at providing education with excellence.">
    <mata name="keywords" content="YMARU online education distance learning ethiopian study home">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="shortcut icon" href="../Logo/logo.jpeg">
        <title>Tutee Home</title>

        <script>
            slide_images = new Array('../Images/tutoring pic 6_11zon.png', '../Images/for student_11zon.jpg','../Images/for student3_11zon.jpg',
                '../Images/for student2_11zon.jpg', '../Images/for student4_11zon.jpg', '../Images/forall_11zon.jpg');
            title = new Array('Welcome to YMARU Tutoring Website', 'You Must Be Excited To Be Here', 'So Have You Decided Yet, What You Want To Study',
                'Explor The Website. What Are Waiting Then!', 'Are In To Music..........', 'Codding Then..... All Are Available Here');
            
            banner = 0

            function ShowBanners() {
                if (document.images) {
                    banner++
                    if (banner == slide_images.length) {
                        banner = 0
                    }
                    document.ChangeBanner.src = slide_images[banner];
                    document.getElementById('title1').innerText = title[banner];
                    document.getElementById('links').href = links[banner];
                    setTimeout("ShowBanners()", 5000);
                }
            }
        </script>
</head>

<body onload="ShowBanners()" a link="#ffffff">
    <!--Header of text online tutor-->
    <div class="header">
        <nav id="navbar">
            <div class="main-logo">
                <a href="tuteehome.php"><img src="../Logo/logo.jpeg" class="logo" alt="Website logo YMARU"
                        title="YMARU Home"></a>
            </div>
            <div>
                <button class="mobile-menu-toggle">
                    <img src="../Images/ymaru-menu-icon.svg">
                </button>
            </div>

            <ul id="ULlinks" aria-expanded="false">
                <li>
                    <a href="Pages/tuteeProfile.php">Profile</a>
                </li>
                <li>
                    <a href="Pages/about us.php">About Us</a>
                </li>
                <li>
                    <a href="Pages/reportpage.php">Catalogue</a>
                </li>
                <li>
                    <a href="Pages/contact.php">Contact</a>
                </li>
                <li>
                    <a href="Pages/teach.html">Teach</a>
                </li>
                <li>
                    <a href="Pages/logout.php">LogOut</a>
                </li>
                
            </ul>
        </nav>
    </div>

    <div style="clear: left;"></div>

    <div class="warrper">
        <!-- Teach On online platform button-->
        <div class="title">
            <font size="5" color="white" face="arial">
                <h1>YMARU Online Course And Tutor</h1>
            </font>
        </div>

        <div class="slider-wrappeer">
            <div class="slide-image">
                <a href="ymaru_home.html" id="links">
                    <img src="../Images/tutoring pic 6_11zon.png" width="100%" height="auto" name="ChangeBanner" /></a>
            </div>
            <div class="title1" id="title1">first title</div>
        </div>


        <div class="body">
            <div class="division">
                <div class="search">
                    <!--Catagories-->
                    <font size="4" color="white" face="arial">
                        <label for="search1">Search YMARU</label>
                    </font>
                    <div class="search-wrapper">
                        <div class="search-input">
                            <form action="tuteehome.php" method="get">
                             <input type="search" id="search1" name="search">   
                            </form>
                            
                        </div>
                        <div class="search-icon" title="Search">
                            <img width="20px" src="../Images/search-512x512-433864.png ">
                        </div>
                    </div>
                    <font size="4" color="white" face="arial">
                        Feel free to explore.
                    </font>
                </div>
                <br><br>
                <div class="ymaru-message">
                    <h1 align="center">
                        <font size="7"> Hello <?php echo $_SESSION['User_Name'];?> Start Building Your Carer</font>
                    </h1>
                    <font size="5" color="292929">
                        <h3>Transform your life through education </h3>
                    </font>
                    <div class="custome-message">
                        <div class="msg-img">
                            <img src="../Images/lifechang.png" alt="change your life img" width="200" height="200">
                        </div>
                        <div class="message">
                            <font size="4" color="292929"> Learners around the world are launching new careers,
                                advancing in their fields, and enriching their lives.</font>
                        </div>
                    </div>
                </div>
            </div>
<?php if(!isset($_GET['search'])){ ?>
            <div class="recommend_popular">
                <!--recommended and popular-->
                <div class="recommended">
                    <div class="title">
                        <font size="5" color="white" face="arial">You are currently taking</font>
                    </div>
                    <div class="subject_boxes">
                        
                            <?php
        $sql="SELECT * FROM student WHERE username='$UserN'";
        $result=mysqli_query($conn,$sql);
        // $row = mysqli_fetch_assoc($result);

                $catagory=null;
                $course_id=null;
                $FinalCatagory=array();

                    while($row=mysqli_fetch_assoc($result)){
                        $course_id=$row['course_id'];
                        $catagory=$row['catalogue'];
                        $FinalCatagory[$course_id]=$catagory;
                    }
    
        foreach($FinalCatagory as $key=>$value){
                        $sql="SELECT * FROM teacher AS t JOIN course AS c JOIN personaldb AS p WHERE t.course_id='$key' AND c.catalogue='$value' AND c.course_id='$key' AND t.username=p.username";
                        //$sql="SELECT * FROM course WHERE course_id='$key' catalogue='$value'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                            $course=$row['course_name'];
                            $TeacherName=$row['username'];
                            $ProfileImage=$row['profile'];
                            $newone=substr($ProfileImage,38);
                             $profile="Pages/".$newone;
                             $experience=$row['experience'];
                            // $_SESSION['Fetched_Username']=$TeacherName; 
                               ?>
                               <div class="amharic" align="center " title="Amharic">
                               <img src=<?php echo $profile;?> width="30%" height="10% ">
                            <ul type="none">
                                <li>
                                    <font size="3" color="white">
                                        Title: <a href="Pages/interfaceforboth.php?ClickedTeacher=<?php echo $TeacherName;?>"><?php echo $course;?></a>
                                    </font>
                                </li>
                               <li>
                                    <font size="3" color="white">
                                        Calagory: <?php echo $value;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Course giver: <?php echo $TeacherName;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Experience: <?php echo $experience;?>
                                    </font>
                                </li>
                            </ul>
                        </div>
                               
                               <?php         
                        }
                        
                    }
                            ?>
                            
                                

                     
                    </div>
                </div>
                <!--end of recommended-->

                <div class="popular">
                    <div class="title2">
                        <font size="5" color="white" face="arial">
                            Teachers
                        </font>
                    </div>
                    <div class="subject_boxes">
<?php
                    $sql="SELECT * FROM teacher AS t JOIN course AS c JOIN personaldb AS p WHERE t.course_id=c.course_id AND p.username=t.username";
        $result=mysqli_query($conn,$sql);
        // $row = mysqli_fetch_assoc($result);

                $catagory=null;
                // $course_id=null;
                // $FinalCatagory=array();

                    while($row=mysqli_fetch_assoc($result)){
                        // $course_id=$row['course_id'];
                        $catagory=$row['catalogue'];
                        // $FinalCatagory[$course_id]=$catagory;
                            $course=$row['course_name'];
                            $TeacherName=$row['fullname'];
                            $experience=$row['experience'];
                            $ProfileImage=$row['profile'];
                            $newone=substr($ProfileImage,38);
                             $profile="Pages/".$newone;
                            ?>
                            
                        <div class="firstp" align="center ">
                            <img src=<?php echo $profile;?> width="12% " height="12% ">
                            <ul type="none">
                                <li>
                                    <font size="3" color="white">
                                        Name: <?php echo $TeacherName;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                       
                                        course: <a href="Pages/enroll.php?clickedcourse=<?php echo $course;?>&clickedcatagory=<?php echo $catagory;?>"><?php echo $course?></a>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Catalogue: <?php echo $catagory;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Experience: <?php echo $experience;?>
                                    </font>
                                </li>
                            </ul>
                        </div>

                    <?php
                    
                    }
                    ?>

                        

                        
                    
                        <video class="video" controls>
                            <source src="../Video/Best Version Of Yourself - Motivational Video.mp4" type="video/mp4">
                            
                        </video>
                    
                </div>
                <?php
}elseif(isset($_GET['search'])){
    $searchCourse=$_GET['search'];


                ?>
                <div class="popular">
                    <div class="title2">
                        <font size="5" color="white" face="arial">
                            Teachers
                        </font>
                    </div>
                    <div class="subject_boxes">
<?php
                    $sql="SELECT * FROM teacher AS t JOIN course AS c JOIN personaldb AS p ON t.course_id=c.course_id AND c.course_name='$searchCourse' AND p.username=t.username";
        $result=mysqli_query($conn,$sql);
        // $row = mysqli_fetch_assoc($result);

                $catagory=null;
                // $course_id=null;
                // $FinalCatagory=array();

                    while($row=mysqli_fetch_assoc($result)){
                        // $course_id=$row['course_id'];
                        $catagory=$row['catalogue'];
                        // $FinalCatagory[$course_id]=$catagory;
                            $course=$row['course_name'];
                            $TeacherName=$row['fullname'];
                            $experience=$row['experience'];
                            $ProfileImage=$row['profile'];
                            $newone=substr($ProfileImage,38);
                             $profile="Pages/".$newone;
                            ?>
                        <div class="firstp" align="center ">
                            <img src=<?php echo $profile;?> width="12% " height="12% ">
                            <ul type="none">
                                <li>
                                    <font size="3" color="white">
                                        Name: <?php echo $TeacherName;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        course: <?php echo $course;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Catalogue: <?php echo $catagory;?>
                                    </font>
                                </li>
                                <li>
                                    <font size="3" color="white">
                                        Experience: <?php echo $experience;?>
                                    </font>
                                </li>
                            </ul>
                        </div>
                        <?php
                        
                    }?>
                        </div>
                        <?php
                    
                }
                    ?>
                <!--end of popular-->
                
                
            </div>

        </div>

        <!--End of class body-->
    </div>
    <!--wrapper end-->

    <div style="clear: left;"></div>
    
</div>
    <div class="footer">
        <div class="footer-lists">
            <div class="footer-logo-link">
                <div class="ymaru-logo">
                    <a href="tuteehome.php"><img src="../Logo/logo.jpeg" width="60" height="60" title="YMARU Home"></a>
                </div>
                <div class="ymaru-text">
                    <p><a href="tuteehome.php"><span>YMARU</span> Online Course &amp; Tutor</a></p>
                </div>
            </div>
            <div class="social-medias">
                <p>Follow Us On</p>
                <ul>
                    <li><a href="http://facebook.com" target="_blank"> <img src="../Images/facebook.png">
                            <font face="arial">Facebook</font>
                        </a></li>
                    <li><a href="http://twitter.com" target="_blank"> <img src="../Images/twitter.png">
                            <font face="arial">Twitter</font>
                        </a></li>
                    <li><a href="http://instagram.com" target="_blank"> <img src="../Images/instagram-square.jpg">
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
        const logo = document.querySelector(".logo");
        const navbar = document.querySelector("#navbar");
        const menu = document.querySelector("#ULlinks");
        const navToggle = document.querySelector('.mobile-menu-toggle');
        window.onscroll = function () {
            if (window.pageYOffset >= menu.offsetTop) {
                navbar.classList.add("sticky");
                logo.style.width = "80px";
                navToggle.style.backgroundColor = "#ffffff33";
            }
            else {
                navbar.classList.remove("sticky");
                logo.style.width = "150px";
                navToggle.style.backgroundColor = "transparent";
            }
        }
        window.addEventListener("load", function () {
            let BrowserWidth = window.innerWidth;
            if (BrowserWidth < 901) {
                logo.style.width = "80px"
            }
            else {
                logo.style.width = "150px";
            }
        })
        window.addEventListener("resize", function () {
            let BrowserWidth = window.innerWidth;
            if (BrowserWidth < 901) {
                logo.style.width = "80px"
            }
            else {
                logo.style.width = "150px";
            }
        })
        window.addEventListener("scroll", function () {
            let BrowserWidth = window.innerWidth;
            if (BrowserWidth < 901) {
                logo.style.width = "80px"
            }
        })
        /*Navbar Menu Toggle*/

        const mobileMenu = document.querySelector('[aria-expanded]');
        navToggle.addEventListener("click", function () {
            const isOpened = mobileMenu.getAttribute("aria-expanded");
            if (isOpened === "false") {
                mobileMenu.setAttribute('aria-expanded', true);
            }
            else if (isOpened === "true") {
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
        @keyframes change {
            0%{
                background-position: 0 50%;
            }
            50%{
                background-position: 
