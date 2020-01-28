<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/posts.php");
    $post = selectOneInTable("posts", ["id" => $_GET["id"]]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Creative Blog - <?php echo $post["title"] ?></title>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php include(ROOT_PATH . "/app/components/Navbar.php") ?>
        <div class="container mt-5" style="max-width: 650px">
            <h1 style="font-weight: bold; margin-bottom: 15px; color: #0D0B6D"><?php echo $post['title']; ?></h1>
            <p><?php echo $post["body"]; ?></p>
        </div>
        <!-- About and contact shit -->
        <div style="height: 30vh; margin-top: 150px;">
            <div class="d-flex justify-content-center">
                <img src="https://svgur.com/i/HLt.svg" alt="logoBlog" class="logoBlog" style="height: 45px" />
                <h5 style="font-weight: bold; margin-left: 10px; color: #010116">Creative Blog</h5>
            </div>
            <div class="d-flex mt-3 align-items-center justify-content-center">
                <a href="" style="margin-right: 10px; text-decoration: none; color: #010116; font-weight: bold">
                    <span class="activeLink">
                        Home
                    </span>
                </a>
                <a href="" style="text-decoration: none; text-decoration: none; color: #010116; font-weight: bold">
                    <span>
                        Articles
                    </span>
                </a>
                <a href="" style="margin-left: 10px; text-decoration: none; text-decoration: none; color: #010116; font-weight: bold"">
              <span>
                Categories
              </span>
            </a>
          </div>
          <p class=" text-center m-3" style="color: #8887B7; font-size: 10px">@Ludovic COULON - 2020</p>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>