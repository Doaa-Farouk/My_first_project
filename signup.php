<?php include 'header/header.php' ?>

<link rel="stylesheet" href="css/signup.css">

<div class="container">
    <h2>New Account</h2>
    <p class="x">Have an account?<a href="login.php" target="_blank">Login</a></p>
    <form action="" method="post" enctype="multipart/form-data">

        <div>
            <p class="y">Choose Your Username And Password</p>
            <label for="usrnm">Username</label>
            <input class="npt" type="text" name="usrnm" id="usrnm">
        </div>
        <div>
            <p class="password_details">The password must have at least 8 characters, at least 1 digit(s), at least 1 lower case letter(s), at least 1 upper case letter(s), at least 1 non-alphanumeric character(s) such as as *, -, or #</p>
            <label for="passwd">Password</label>
            <input class="npt" type="text" name="passwd" id="passwd">
        </div>
        <hr>
        <p>More Details</p>
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
                <option value="Yemen">Yemen</option>
                <option value="Egypt">Egypt</option>
                <option value="Qatar">Qatar</option>
                <option value="Jordan">Jordan</option>
                <option value="Iraq">Iraq</option>
            </select>

        </div>
        <hr>
        <p>Acadamic Information</p>
        <div>
            <label for="mjr">Major</label>
            <input class="npt" type="text" name="mjr" id="mjr">
        </div>
        <div>
            <button name="create">Create New Account</button>
            <button name="cancel">Cancel</button>
        </div>
    </form>
</div>
<?php include 'footer/footer.php';
