<?php 
    include("../../../path.php");
    include(ROOT_PATH . "/app/controllers/users.php");
    include(ROOT_PATH . "/app/controllers/checkUsers.php");
    adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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
    <link href="../../../assets/dashboard.css" rel="stylesheet" />
    <title>Creative Blog - Create users section</title>
  </head>

  <body>
  <?php include(ROOT_PATH . "/app/components/navbar_dashboard.php") ?>
    <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"
          >
            <h1 style="font-weight: bold">Create user</h1>
          </div>
          <a href="<?php echo BASE_URL . "app/admin/users/create_users.php" ?>" style="text-decoration: none">
            <button
              class="btn mr-2"
              style="background-color: #3941FF; color: white; padding: 15px; font-weight: bold; margin-top: 15px"
            >
              Create user
            </button>
          </a>
          <a href="<?php echo BASE_URL . "app/admin/users/users.php" ?>" style="text-decoration: none">
            <button
              class="btn"
              style="background-color: white; color: black; padding: 15px; font-weight: bold; margin-top: 15px"
            >
              See all the users
            </button>
          </a>
          <?php include(ROOT_PATH . "/app/components/error_handler_form.php") ?>
          <div class="mt-5">
            <form class="mt-4" action="create_users.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: #f6f6f6"
                  >Username</label
                >
                <input
                  value="<?php echo $user_name ?>"
                  name="user_name"
                  type="text"
                  class="form-control"
                  id="exampleInputEmail1"
                  placeholder="Username"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: #f6f6f6"
                  >Email</label
                >
                <input
                  value="<?php echo $email ?>"
                  name="email"
                  type="text"
                  class="form-control"
                  id="exampleInputEmail2"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" style="color: #f6f6f6"
                  >Password</label
                >
                <input
                  value="<?php echo $password ?>"
                  name="password"
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Password"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" style="color: #f6f6f6"
                  >Password confirmation</label
                >
                <input
                  value="<?php echo $password_confirm ?>"
                  name="password_confirm"
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Password confirmation"
                />
              </div>
              <div class="custom-control custom-checkbox mt-3 mb-4">
                <?php if(isset($admin) && $admin == 1) : ?>
                  <input
                    name="admin"
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck1"
                    checked
                  />
                  <label class="custom-control-label" for="customCheck1"
                    >Admin user ?</label
                  >
                <?php else: ?>
                  <input
                    name="admin"
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck1"
                  />
                  <label class="custom-control-label" for="customCheck1"
                    >Admin user ?</label
                  >
                <? endif; ?>
              </div>
              <button
                name="create-admin"
                type="submit"
                class="btn mr-2"
                style="background-color: #3941FF; color: white; padding: 15px; font-weight: bold; margin-top: 15px"
              >
                Add the user
              </button>
            </form>
          </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
      integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
      integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
      crossorigin="anonymous"
    ></script>
  </body>
</html>