<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header/header.css">
    <title>Mahara-tech: $var</title>
</head>

<body>
    <div class="head">
        <nav>
            <div class="logo_ul">
                <img class='main-logo' src="images/LOGO maharatech.png">
                <ul>
                    <li>
                        <a href="index.html">Home</a> </li>
                    <li>
                        <a href="career_talks.html" target="_blank">Career Talks</a></li>
                    <li>
                        <a href="technological_tracks.html" target="_blank">Technological Tracks</a></li>
                    <li>
                        <a href="industry_parteners.html" target="_blank">Industry Parteners</a></li>
                    <li>
                        <a href="#" target="_blank">Freelancing Initiative</a></li>
                    <li>
                        <a href="#" target="_blank">Scholarships(ITI Students)</a></li>
                </ul>
            </div>
            <div class="login">
                <ul>
                    <!-- icon -->
                    <li><i class="fa-regular fa-user"></i></li>

                    <li>
                        <a href="login.php" target="_blank">Login/Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
        $select_q = 'select * from categories where id=:id';
        $result = $con-> prepare($select_q);
        $result-> execute(array(":id" => $_GET['id']));
        
        if($result->rowCount())
        {   
            $row = $result->fetchAll();
            foreach($row as $r)
            {
                $categoryid = $r['id'];
                $categoryname=  $r['name'];
            }
        }

        $select_c = 'select * from courses where cat_id=:id';
        $result_c = $con-> prepare($select_c);
        $result_c -> execute(array(":id" => $_GET['id']));

            $rows = $result_c->fetchAll();
            foreach($rows as $rr)
            {
                $course_id = $rr['id'];
                $course_name = $rr['name'];
            }
        
    ?>
        <div class="heaad">
            <div class="h">
                <?php 
                    if(!empty($categoryname))
                        echo $categoryname; 
                    if(!empty($coursename))
                        echo $coursename;
                ?>
            </div>
            <div class="path">
                <a href="index.php">Home /Courses/</a>
                <a href="#"> 
                    <?php 
                        if(!empty($categoryname))
                        echo $categoryname; 
                        if(!empty($coursename))
                        echo $coursename;
                    ?>
                </a>
                <a href="#">
                    <?php
                        if(!empty($coursename))
                            echo $coursename;
                    ?>
                </a>
            </div>
        </div>
    </div>

