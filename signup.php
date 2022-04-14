<link rel="stylesheet" href="css/signup.css">
<?php include 'header/header.php' ?>

<div class="container">
    <div class="account">
        <h2>New Account</h2>
        <p class="x">Have an account? <a class="x" href="login.php" target="_blank">Login</a></p>
    </div>
    <form action="" method="post" enctype="multipart/form-data">

        <div>
            <p class="subttl">Choose Your Username And Password</p>
            <label for="usrnm">Username</label>
            <input class="npt" type="text" name="usrnm" id="usrnm">
        </div>
        <div>
            <label for="passwd">Password</label>
            <input class="npt" type="text" name="passwd" id="passwd">
            <!-- <p class="password_details">The password must have at least 8 characters, at least 1 digit(s), at least 1 lower case letter(s), at least 1 upper case letter(s), at least 1 non-alphanumeric character(s) such as as *, -, or #</p> -->
        </div>
        <!-- <hr>     -->
        <!-- <p class="subttl">More Details</p> -->
        <div>
            <label for="email">Email Address</label>
            <input class="npt" type="email" name="email" id="email">
        </div>

        <div>
            <label for="emailc">Email Again</label>
            <input class="npt" type="email" name="emailc" id="emailc">
        </div>

        <div>
            <label for="cntry">Country</label>
            <select class="npt" name="cntry" id="cntry">
                <option value=""></option>
                <option value="Yemen">Yemen</option>
                <option value="Egypt">Egypt</option>
                <option value="Qatar">Qatar</option>
                <option value="Jordan">Jordan</option>
                <option value="Iraq">Iraq</option>
            </select>

        </div>
        <!-- <hr> -->
        <!-- <p class="subttl">Acadamic Information</p> -->
        <div>
            <label for="mjr">Major</label>
            <input class="npt" type="text" name="mjr" id="mjr">
        </div>
        <div>
            <label for="photo">Id Card (Optional)</label>
            <input class="npt" type="file" name="idcard" id="photo">
        </div>
        <hr>
        <div id="btn">
            <button name="create">Create New Account</button>
            <button name="cancel" class="cncl">Cancel</button>
        </div>
    </form>
</div>
<?php

    include 'connect.php';
    if(isset($_POST['create']))
    {
        $username = $_POST['usrnm'];
        $password = $_POST['passwd'];
        $email = $_POST['email'];
        // $email_confirmation = $_POST['emailc'];
        $country = $_POST['cntry'];
        $major = $_POST['mjr'];
        // $id_card = $_POST['idcard'];

        $insert_q = "insert into users(id,username,password,email,country,major) values(7,'$username', '$password','$email','$country','$major')";
        $result = $con -> exec($insert_q);
    }

?>
<?php include 'footer/footer.php';
