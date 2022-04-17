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
        <div class="heaad">
            <div class="h">
            <!-- <?php
                // $id = $_GET[':id'] ;
                
                $select_q = "select * from courses";
                $result = $con->query($select_q);
                while($row = $result-> fetch())
                {
                    echo $row['name'];
                }

            ?> -->
            </div>
            <div class="path">
                <a href="index.html">Home</a>/Site Pages/<a href="#"> 
                    <!-- <?php
                        $select_q = "select * from categories";
                        $result = $con->query($select_q);
                        while($row = $result-> fetch())
                        {
                            echo $row['name'];
                        }

                    ?> -->
                </a>/
                    <!-- <?php
                        $select_q = "select * from courses";
                        $result = $con->query($select_q);
                        while($row = $result-> fetch())
                        {
                            echo $row['name'];
                        }

                        ?> -->
            </div>
        </div>
    </div>

