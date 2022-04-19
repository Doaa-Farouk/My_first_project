<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharat Tech</title>
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css" /> 
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo_ul">
                <img class='main-logo' src="images/LOGO maharatech.png">
                <ul>
                    <li>
                        <a href="../index.php">Home</a> </li>
                    <li>
                        <a href="../career_talks.html" target="_blank">Career Talks</a></li>
                    <li>
                        <a href="../technological_tracks.html" target="_blank">Technological Tracks</a></li>
                    <li>
                        <a href="../industry_parteners.html" target="_blank">Industry Parteners</a></li>
                    <li>
                        <a href="#" target="_blank">Freelancing Initiative</a></li>
                    <li>
                        <a href="#" target="_blank">Scholarships(ITI Students)</a></li>
                </ul>
            </div>
            <div class="login">
                <ul>
                    <!-- icon -->
                    <i class='fas fa-user'></i>
                    <li>
                        <a href="login.php" target="_blank">Login/Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="word">Mahara-Tech</div>
        <a href="#about"><input class="about_btn" type="button" value="Read More"></a>
    </div>
    <div id="about">
        <h2>ABOUT MAHARATECH</h2>
        <p class="what_is">
            Mahara-Tech is an online learning platform, offering high-quality courses authored by Information Technology Institute ITI, All Videos are produced in ITI e-Learning Studio to serve Arab Youth in Information Technology Fields and avail Content for a wide
            range of Learners to update their knowledge of new technologies and enriching Arabic content. T his initiative aims to raise community awareness with Mahara Tech platform and Its content and scientific importance in the field of information
            technology.
        </p>
    </div>
    <h2>Mahara-Tech Technological Tracks</h2>
    <h5>Learn about the technological tracks provided to you by the Mahara- Tech platform</h5>

    <div class="pics">
        
        <ul>
            <li class="pictures">
                <?php
                    $select_q = "select * from categories";
                    $result = $con->prepare($select_q);
                    $result->execute();
                    if($result -> rowCount())
                    {
                        $row = $result->fetchAll();
                        foreach($row as $r)
                        {
                            $id = $r['id'];
                    
                            $img = $r['image'];
                            echo "
                            <a href='header/header.php?id=$id' target='_blank'>
                            <a href='veiw.php?id=$id' target='_blank'>
                            <img src='images/$img'></a>

                            ";
                        }
                    } 
                ?>
            </li>    
        </ul> 
    </div>

    <div>
        <h2>Our Parteners</h2>
        <div>
            <ul class="loogos">
                <li><img class="logos" src="images/etisalatlogo.png" alt=""></li>
                <li><img class="logos" src="images/ibmlogo.png" alt=""></li>
                <li><img class="logos" src="images/wuzzuflogo.png" alt=""></li>
                <li><img class="logos" src="images/vodafonelogo.png" alt=""></li>
                <li><img class="logos" src="images/nokialogo.png" alt=""></li>
                <li><img class="logos" src="images//vmwarelogo.png" alt=""></li>
                <li><img class="logos" src="images/undplogo.png" alt=""></li>
                <li><img class="logos" src="images/spimelogo.png" alt=""></li>
            </ul>
        </div>
    </div>
<?php include 'header/footer.php';