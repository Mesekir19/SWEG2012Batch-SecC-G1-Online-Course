<?php
session_start();
include '../config/db_con.php';
if(!isset($_SESSION['Admin_User_Name'])){
    header("location: ../index.php");
    die();
}

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
        <link rel="stylesheet" href="../css/catalogue.css">
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
  <script type="text/javascript" src="../JS/loader.js"></script>  
        
        <link rel="shortcut icon" href="../Logo/logo.jpeg">
        <title>report page</title>
</head>

<body a link="#353535">
    <div class="header">

        <div class="nav-logo">
            <a href="adminReport.php"><img src="../Logo/logo.jpeg" width="80px" title="YMARU Home"></a>
        </div>

        <div>
            <button class="mobile-menu-toggle">
                <img src="../Images/ymaru-menu-icon.svg">
            </button>
        </div>

        <div class="nav-links">
            <ul aria-expanded="false">
                <li>
                    <a href="edit.php">Search</a>
                </li>
                <!-- <li>
                    <a href="about us.html">About us</a>
                </li> -->
                <!-- <li>
                    <a href="contact.php">Contact</a>
                </li> -->
                <li>
                    <a href="../php/Pages/logout.php">Logout</a>
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

                    <?php
                


                    

                ?>
                        
                       
                        
                        
                        </tr>
                        <?php
                        // }
                        ?>
                    
                </table>
    <br>
    <br>
    <br>
        <div class="pie">  
                <h3>Number of Users Based on Their Gender</h3>  
                <br />  
                <div id="piechart" class="piechart"></div>  
           </div>  
           <?php
           $query = "SELECT gender, count(*) as number FROM personaldb GROUP BY gender";  
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
           $query = "SELECT country, count(*) as number FROM personaldb GROUP BY country";  
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
            $query="SELECT MONTHNAME(created_date) AS month, COUNT(*) as number FROM personaldb GROUP BY month";
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
                <h3>Course Catagory Students Enrolled In</h3>  
                <br />  
                <div id="piechart3" class="piechart"></div>  
           </div>  
           <?php

        //    $query="SELECT * FROM teacher AS t JOIN course AS c WHERE t.course_id='$submitVal' AND c.course_id='$submitVal'";
            $query="SELECT catalogue, COUNT(*) as number FROM student GROUP BY catalogue";
            // $query="SELECT username, COUNT(*) as number FROM teacher GROUP BY username";
            // $query="SELECT MONTHNAME(created_date) AS month, COUNT(*) as number FROM personaldb GROUP BY month";
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
                               echo "['".$row["catalogue"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of students per Course Catagory',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
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
            $query="SELECT YEAR(created_date) AS year, COUNT(*) as number FROM personaldb GROUP BY year";
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




<div class="pie">  
                <h3>Catagory Of Courses Given</h3>  
                <br />  
                <div id="piechart5" class="piechart"></div>  
           </div>  
           <?php

        //    $query="SELECT * FROM teacher AS t JOIN course AS c WHERE t.course_id='$submitVal' AND c.course_id='$submitVal'";
            $query="SELECT catalogue, COUNT(*) as number FROM course GROUP BY catalogue";
            // $query="SELECT username, COUNT(*) as number FROM teacher GROUP BY username";
            // $query="SELECT MONTHNAME(created_date) AS month, COUNT(*) as number FROM personaldb GROUP BY month";
           //$query = "SELECT country, count(*) as number FROM personaldb GROUP BY country";  
           $result = mysqli_query($conn, $query); 
           
           ?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Catalogue', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["catalogue"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of course catagory given',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart5'));  
                chart.draw(data, options);  
           }  
           </script> 



<div class="pie">  
                <h3>How many students endrolled in whos course</h3>  
                <br />  
                <div id="piechart6" class="piechart"></div>  
           </div>  
           <?php

           $query="SELECT p.fullname, COUNT(*) as number FROM student AS s JOIN teacher AS t JOIN personaldb AS p WHERE t.course_id = s.course_id AND t.username=p.username GROUP BY t.course_id";
            // $query="SELECT catalogue, COUNT(*) as number FROM course GROUP BY catalogue";
            // $query="SELECT username, COUNT(*) as number FROM teacher GROUP BY username";
            // $query="SELECT MONTHNAME(created_date) AS month, COUNT(*) as number FROM personaldb GROUP BY month";
           //$query = "SELECT country, count(*) as number FROM personaldb GROUP BY country";  
           $result = mysqli_query($conn, $query); 
           
           ?>
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Catalogue', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["fullname"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Students per Teacher',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart6'));  
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
                .warrper .bodypart {
                    min-width: 400px;
                    background: #c8d8e4;
                    border-radius: 10px;
                    padding: 30px;
                    margin: 4rem auto;
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