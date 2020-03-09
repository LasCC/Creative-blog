<?php
    include("path.php");
    include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="./assets/login.css">
    <title>Creative Blog - Login</title>
</head>

<body>
    <div class="row">
        <div class="alignContent col-12 col-sm-4 col-md-4" style="background-color: white; padding: 55px">
            <form class="mt-4" action="login.php" method="post">
                <a href="<?php echo BASE_URL ?>">
                    <div class="d-flex mb-3 align-items-center">
                        <img src="./assets/images/elph.svg" alt="logoWebsite" class="animated fadeInDown"
                            style="height: 70px">
                        <h5 style="font-weight: bold; margin-left: 10px; color: #010116"
                            class="mt-2 animated fadeInDown delay-1s">Creative Blog</h5>
                    </div>
                </a>
                <?php include(ROOT_PATH . "/app/components/error_handler_form.php") ?>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: black">Username</label>
                    <input value="<?php echo $user_name; ?>" name="user_name" type="text" class="form-control"
                        id="exampleInputEmail1" placeholder="Michel Platini" />
                    <small id="emailHelp" class="form-text" style="color: black">Never share your credentials to
                        anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: black">Password</label>
                    <input value="<?php echo $password; ?>" name="password" type="password" class="form-control"
                        id="exampleInputPassword1" placeholder="*************" />
                </div>
                <button name="loginBtn" type="submit" class="btn btn-raised mt-4"
                    style="width: 100%; color: white; background-color: #006cff; font-weight: bold; border-radius: 15px">
                    Login
                </button>
                <p style="color: black; font-size: 15px" class="mt-3 text-center">
                    You don't have any account ?
                    <a href="<?php echo BASE_URL . 'register.php' ?>"
                        style="color: #006cff; font-weight: bold">Register</a>
                </p>
                <p class="text-center" style="font-size: 10px; color: gray">@Ludovic COULON - LasCC on github.</p>
            </form>
        </div>
        <div class="alignContent col-12 col-sm-8 col-md-8 d-none d-lg-inline-flex d-md-inline-flex"
            style="padding: 55px">
            <h1 style="color: white; font-weight: 13px; font-weight: 600" class="animated fadeInDown delay-2s">Explore
                <br /><span class="animated fadeInDown delay-3s">new horizons.</span></h1>
            <img src="https://i.imgur.com/HiSAfJc.png" alt="doodle" style="height: 450px">
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@mcrowe/html-purifier@0.0.4/lib/index.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>