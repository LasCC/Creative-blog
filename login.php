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
    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
      integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/login.css" />
    <title>Creative Blog - Login</title>
  </head>
  <body>
    <div class="alignContent container">
      <div
        style="background-color: #3941FF; height: auto; width: 50%; padding: 55px"
      >
        <img
          class="mb-3"
          src="https://svgur.com/i/HM_.svg"
          alt="logoBlog"
          style="height: 50px"
        />

        <?php include(ROOT_PATH . "/app/components/error_handler_form.php") ?>

        <h4 class="mt-2" style="color: white; font-weight: bold">
          Connect with your account to see all the articles
        </h4>
        <form class="mt-4" action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1" style="color: #f6f6f6"
              >Username</label
            >
            <input
              value="<?php echo $user_name; ?>"
              name="user_name"
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              placeholder="Username"
            />
            <small id="emailHelp" class="form-text" style="color: #f6f6f6"
              >Never share your credentials to anyone else.</small
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style="color: #f6f6f6"
              >Password</label
            >
            <input
              value="<?php echo $password; ?>"
              name="password"
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
            />
          </div>
          <button
            name="loginBtn"
            type="submit"
            class="btn btn-raised mt-4"
            style="width: 100%; color: #3941FF; background-color: white; font-weight: bold;"
          >
            Login
          </button>
          <p style="color: #f6f6f6; font-size: 15px" class="mt-3 text-center">
            You don't have any account ?
            <a href="<?php echo BASE_URL . 'register.php' ?>" style="color: white; font-weight: bold"
              >Register</a
            >
          </p>
        </form>
      </div>
      <div style="height: 70%; width: 50%; padding: 25px">
        <img src="https://svgur.com/i/HNK.svg" style="height: 100%" alt="imageLogin" />
      </div>
    </div>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
