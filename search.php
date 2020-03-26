<?php
  include("path.php");
  include(ROOT_PATH . "/app/controllers/categories.php");
  $post = array();
  $postTile = "Enter your query...  (corona, maladie..)";

  if (isset($_POST["search-term"])) {
      $postTile = "All the articles for : " . $_POST["search-term"];
      $post = searchTerm($_POST["search-term"]);
    } else {
      $posts = getPublishedPosts();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Creative Blog</title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . "/app/components/Navbar.php") ?>
        <?php include(ROOT_PATH . "/app/components/message_handler.php") ?>
        <!-- search topics -->
        <div style="margin-top: 105px" id="articles">
            <h3 style="color: #010116; font-weight: bold"><?php echo $postTile ?></h3>
            <form method="post">
                <input class="form-control" type="text" name="search-term" placeholder="chine, corona...">
            </form>
            <hr />
            <?php foreach ($post as $posts): ?>
            <a href="article.php?id=<?php echo $posts["id"]; ?>" style="text-decoration: none"
                title="<?php echo $posts["title"]; ?>">
                <div class="d-flex whiteCard hoverCard mt-3 mb-3 align-items-center image-blog" id="articles">
                    <div class="d-none d-lg-inline-flex d-md-inline-flex">
                        <img src="<?php echo BASE_URL . "/assets/images/" . $posts["image"]; ?>"
                            style="height: 180px; border-radius: 6px" />
                    </div>
                    <div class="ml-3">
                        <h5 style="font-weight: bold; color: #010116, font-size: 15px"><?php echo $posts["title"]; ?>
                        </h5>
                        <hr />
                        <span
                            style="color: black; font-size: 15px"><?php echo mb_substr($posts["body"], 0, 250) . " ..."; ?></span><br />
                        <p style="font-size: 10px; color: #636363; margin-top: 10px" class="mt-3">
                            <?php echo $posts["user_name"]; ?> -
                            <?php echo date("F j, Y", strtotime($posts["created_at"])); ?></p>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <!-- About and contact shit -->
        <div style="height: 30vh; margin-top: 150px;">
            <div class="d-flex justify-content-center">
                <div class="d-flex align-items-center">
                    <img src="./assets/images/elph.svg" alt="logoWebsite" style="height: 50px">
                    <h5 style="font-weight: bold; margin-left: 10px; color: #010116" class="mt-2">Creative Blog</h5>
                </div>
            </div>
            <p class=" text-center m-3" style="color: #636363; font-size: 10px">@Ludovic COULON - 2020</p>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
    integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
    integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
</script>

</html>