<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet" />
    <link href="./assets/login.css" media="all" rel="stylesheet" type="text/css" />
    <title>Creative Blog - Register</title>
</head>

<body>
    <div class="alignContent">
        <div class="hoverCard" style="background-color: white; padding: 55px; border-radius: 15px; width: 35%">
            <a href="<?php echo BASE_URL ?>">
                <div class="d-flex mt-2 mb-2 align-items-center">
                    <img src="https://svgur.com/i/HLt.svg" alt="logoBlog" class="logoBlog" style="height: 55px" />
                    <h5 style="font-weight: bold; margin-left: 10px; color: #010116">
                        Creative Blog
                    </h5>
                </div>
            </a>
            <?php include(ROOT_PATH . "/app/components/error_handler_form.php") ?>
            <h4 class="mt-2" style="color: black; font-weight: bold">
                Create a free account to see all the content
            </h4>
            <form class="mt-4" action="register.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: black">Username</label>
                    <input value="<?php echo $user_name; ?>" name="user_name" type="text" class="form-control"
                        id="exampleInputEmail1" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: black">Email</label>
                    <input value="<?php echo $email; ?>" name="email" type="email" class="form-control"
                        id="exampleInputEmail1" placeholder="Email" />
                    <small id="emailHelp" class="form-text" style="color: #3941FF">We'll never share your email with
                        anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: black">Password</label>
                    <input value="<?php echo $password; ?>" name="password" type="password" class="form-control"
                        id="exampleInputPassword1" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: black">Password confirmation</label>
                    <input value="<?php echo $password_confirm; ?>" name="password_confirm" type="password"
                        class="form-control" id="exampleInputPassword1" placeholder="Password confirmation" />
                </div>
                <button name="registerBtn" type="submit" class="btn btn-raised mt-4"
                    style="width: 100%; color: white; background-color: #3941FF; font-weight: bold;">
                    Register
                </button>
                <p style="color: black; font-size: 15px" class="mt-3 text-center">
                    You already have an account ?
                    <a href="<?php echo BASE_URL . 'login.php' ?>" style="color: #3941FF; font-weight: bold">Login</a>
                </p>
            </form>
        </div>
    </div>

</body>
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