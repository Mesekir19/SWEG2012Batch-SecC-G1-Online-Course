<?php
session_start();
include '../../config/db_con.php';
$TeachUsername=$_SESSION['User_Name'];
// $query = "SELECT * FROM personaldb";
// $result = mysqli_query($conn, $query);
// $chart_data = '';
// while($row = mysqli_fetch_array($result))
// {
//  $chart_data .= "{ created_date:'".$row["created_date"]."',  age:".$row["birthdate"]."}, ";
// }
// $chart_data = substr($chart_data, 0,-2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="author" content="Mesekir">
    <meta name="title" content="YMARU online course and tutor">
    <meta name="description"
        content="YMARU is an Ethiopian online learning platform aimed at providing education with excellence.">
    <mata name="keywords" content="YMARU online education distance learning ethiopian study home">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/catalogue.css">
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
  <script type="text/javascript" src="../../JS/loader.js"></script>  
     <link rel="shortcut icon" href="../../Logo/logo.jpeg">
     <title>report page</title>
</head>

<body a link="#353535">
    <div class="header">
        <div class="nav-logo">
            <a href="../tuteehome.php"><img src="../../Logo/logo.jpeg" width="80px" title="YMARU Home"></a>
        </div>
        <div>
            <button class="mobile-menu-toggle">
                <img src="../../Images/ymaru-menu-icon.svg">
            </button>
        </div>

        <div class="nav-links">
            <ul aria-expanded="false">
                <li>
                    <a href="interfaceforboth.php">Uploaded Materials</a>
                </li>
                <!-- <li>
                    <a href="about us.html">About us</a>
                </li> -->
                <!-- <li>
                    <a href="contact.php">Contact</a>
                </li> -->
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div style="clear: left;"></div>
       <div class="warrper">
        <h1>Every thing you need to know is here</h1>
       <!-- <div class="container" style="width:900px;">
   <h2 align="center">Morris.js chart with PHP & Mysql</h2>
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
        -->
<!-- <br><br><br><br>
                <h3>Every thing you need to know is here</h3> -->
                <!-- <p>To get started, choose your category, choose your subject, select your
                    course and off you go. It couldn&apos;t be easier!</p> -->
       </div>
             <!--End of departments box-->
    </div>
        <!--End of Body-->
    </div>
    <!--wrapper end-->
    <div style="clear: left;"></div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    // $sql="SELECT  YEAR(created_date) AS year, MONTHNAME(created_date) AS month, COUNT(*) FROM personaldb GROUP BY username";
    ?>
<!-- <table border="1" class="table" color="black">
                    <tr>
                        <th>year</th>
                        <th>count</th>
                        <th>month</th>
                        <th>count</th>
                    </tr>
                    <tr>
                    <?php
                  // $submitVal=$_POST['courses';
                   
                //    echo "$submitVal";

                // $value=2022;
                //     $sql="SELECT username, COUNT(*) FROM personaldb WHERE created_date >= DATE_FORMAT(CURDATE(), '%$value-%m-%d') ";
                //     $result1 = mysqli_query($conn, $sql);
                //     while($row=mysqli_fetch_assoc($result1)){
                //         $year=$value;
                //         // $month=$row['month'];
                //         $count=$row['COUNT(*)'];
                        
                        //$teachingExp=$row['experience'];
                ?>
                        </tr>
                </table>
    <br>
    <br>
    <br> -->
    <div class="pie">  
                <h3>Number of Users Based on Their Gender</h3>  
                <br>  
                <div id="piechart" class="piechart"></div>  
           </div>  
<?php
        $sql="SELECT * FROM teacher WHERE username='$TeachUsername'";
        $result = mysqli_query($conn, $sql); 
        $row=mysqli_fetch_array($result);
        $courseId=$row['course_id'];
        $query="SELECT gender, count(*) as number FROM personaldb AS p JOIN student AS s WHERE s.course_id = '$courseId' AND s.username=p.username GROUP BY p.gender";

        //    $query = "SELECT gender, count(*) as number FROM personaldb GROUP BY gender";  
        $result = mysqli_query($conn, $query); 
     
?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Users',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script> 
    <div class="pie">  
                <h3>Users Proportion In Terms Of Their Country</h3>  
                <br />  
                <div id="piechart1" class="piechart"></div>  
           </div>  
           <?php
        $query="SELECT country, COUNT(*) as number FROM student AS s JOIN personaldb AS p WHERE s.course_id ='$courseId' AND s.username=p.username GROUP BY country";
           $result = mysqli_query($conn, $query); 
           
           ?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["country"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Users Country',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart.draw(data, options);  
           }  
           </script> 

            <div class="pie">  
                <h3>Monthly Registerd Users</h3>  
                <br />  
                <div id="piechart2" class="piechart"></div>  
           </div>  
           <?php

        //    $query="SELECT * FROM teacher AS t JOIN course AS c WHERE t.course_id='$submitVal' AND c.course_id='$submitVal'";
            //$query="SELECT catalogue, COUNT(*) as number FROM student GROUP BY catalogue";
            // $query="SELECT username, COUNT(*) as number FROM teacher GROUP BY username";
            $query="SELECT MONTHNAME(enrollDate) AS month, COUNT(*) as number FROM student WHERE course_id='$courseId' GROUP BY month";
           //$query = "SELECT country, count(*) as number FROM personaldb GROUP BY country";  
           $result = mysqli_query($conn, $query); 
           
           ?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Teacher', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["month"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of monthly registerd users',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script> 

            <div class="pie">  
                <h3>Yearly Registered Users</h3>  
                <br />  
                <div id="piechart4" class="piechart"></div>  
           </div>  
           <?php

        //    $query="SELECT * FROM teacher AS t JOIN course AS c WHERE t.course_id='$submitVal' AND c.course_id='$submitVal'";
            //$query="SELECT catalogue, COUNT(*) as number FROM student GROUP BY catalogue";
            // $query="SELECT username, COUNT(*) as number FROM teacher GROUP BY username";
            $query="SELECT YEAR(enrollDate) AS year, COUNT(*) as number FROM student WHERE course_id='$courseId' GROUP BY year";
           //$query = "SELECT country, count(*) as number FROM personaldb GROUP BY country";  
           $result = mysqli_query($conn, $query); 
           
           ?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Teacher', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["year"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of yearly registered users',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart.draw(data, options);  
           }  
           </script> 
    <script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'created_date',
 ykeys:['birthdate'],
 labels:['Birthdate'],
 hideHover:'auto'
//  stacked:true
});
</script>
    <script>
        const mobileMenu = document.querySelector('[aria-expanded]');
        const navToggle = document.querySelector('.mobile-menu-toggle');
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
                button[type="submit1"] {
                position: relative;
                border: 1px solid #091118;
                background: none;
                font-size: 20px;
                padding: 1px 2px;
                font-family: montserrat;
                cursor: pointer;
                margin: 2px;
                transition: .8s;
                overflow: hidden;
        }

        button[type="submit1"] {
            color: #3498db;
        }

        button[type="submit1"]:hover {
            color: #fff;
        }

        button[type="submit1"]::before {
            top: 0;
            border-radius: 0 0 50% 50%;
        }

        button[type="submit1"]:hover::before {

            height: 180%;
        }


        button[type="submit"]{
                position: relative;
                border: 1px solid #091118;
                background: none;
                font-size: 20px;
                padding: 1px 2px;
                font-family: montserrat;
                cursor: pointer;
                margin: 10px;
                transition: .8s;
                overflow: hidden;
            }
        button[type="submit"] {
            color: #3498db;
        }
        button[type="submit"]:hover {
            color: #fff;
        }
        button[type="submit"]::before {
            bottom: 0%;
            border-radius: 50% 50% 0 0;
        }

        button[type="submit"]:hover::before {

            height: 180%;
        }
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
                    .pie{
                        width: 35%;
                        height: 100%;
                        display: flex;
                        min-width: 250px;
        
                        margin: 3% 7%;
                        /* padding: 30px; */
                        flex-direction: column; 
                        justify-content: center; 
                        float: left;
                        position: relative;
                        /* margin-left: 7%;
                        margin-right: 5%;
                        margin-top: 3%; */
                        background-color: rgba(200, 216, 228);
                        box-shadow: 0 0 2px 4px #ffffff33;
                        box-sizing: 0 5px 25px rgba(0,0,0,0.1);
                    }
                    .pie .piechart{
                        width: 100%;
                        height: 100%;
                        /* float: left; */
                        /* justify-content: space-around;  */
                        background-color: rgba(19, 15, 15, 0.5);
                        box-shadow: 0 0 2px 4px #ffffff33;
                        box-sizing: 0 5px 25px rgba(0,0,0,0.1);
                    }
                    @media (max-width: 730px){
                    .pie{
                width: 90%;
            }
        }
</style>
</body>
</html>