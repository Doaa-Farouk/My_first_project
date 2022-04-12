<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <dialog open>
        <div class="container">
            <p class="close">x</p>
            <h2 class="x">Login to your account</h2>
            <p class="y">Don't have an account?<a href="signup.html" target="_blank"> Sign up!</a></p>
            <br>
            <form>
                <div>
                    <input type="text" placeholder="Username" class="credentials">
                    <br>
                    <input type="password" placeholder="Password " class="credentials ">
                </div>
                <div class="r">
                    <input type="checkbox" id="username">
                    <label for="username">Remember username</label>

                    <a class="R" href="# ">Lost password?</a>
                </div>

                <input type="submit" value="Log in" class="log">

                <div>
                    <p class="txt">Log in using your account on:</p>

                    <input type="submit" value="Google" class="subs">
                    <br>
                    <input type="submit" value="Microsoft" class="subs">
                    <p>x</p>
                </div>

            </form>
        </div>
    </dialog>
</body>

</html>