<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Kalender </title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin 0;
            padding: 0;
            background-color: black;
        }

        #kalender {
            width: 80%;
            height: 80%;
            margin: 0 auto;
            text-align: center;
            background-color: white;
            box-sizing: content-box;
        }

        #monthname {
            width: 100%;
            height: 10%;
            background-color: lightblue;
            border: 1px solid black;
            text-align: center;
        }

        #monthname h1 {
            line-height: 1;
            display: inline-block;
            vertical-align: middle;
        }
        
        .left {
            width: 10%;
            height: 100%;
            float: left;
        }
        
        .right {
            width: 10%;
            height: 100%;
            float: right;
        }
        
        .right img {
            width: 100%;
            height: 100%;
        }
        
        .daynumber {
            width: 20%;
            height: 10%;
            float: left;
        }

        .daynumber button {
            width: 100%;
            height: 100%;
            border: 1px solid black;
            box-sizing: border-box;
            background-color: white;
            position: relative;
         }
        
        .daynumber button .top-right {
            position: absolute;
            top: 1%;
            right: 1%;
            text-align: right;
        }

    </style>
</head>

<body>
    <?php
    $month = 1;
    $year = date("Y");
    $monthname = "Januari";
    $daysinmonth = cal_days_in_month(CAL_GREGORIAN,$month,$year);
    
    echo "<div id='kalender'>";
    echo "<div id='monthname'>";
    echo "<div class='left'></div>";
    echo "<h1>" . $monthname . "</h1>";
    echo "<div class='right'><a href='february.php'><img src='img/right.png'></a></div>";
    echo "</div>";
    for ($i = 01; $i <= $daysinmonth; $i++) {
        echo "<form class='daynumber' method='post' action='date.php'><input type='hidden' name='date' value='$year-$month-$i'><button type='submit' name='getdate'>";
        echo "<div class='top-right'>" . $i . "</div><br>";
        echo "</button></form>";
    }
    echo "</div>";
    ?>
    </body>
</html>