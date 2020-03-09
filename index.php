<?php
  include("path.php");
  include(ROOT_PATH . "/app/controllers/categories.php");
  $posts = getPublishedPosts();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Creative Blog</title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . "/app/components/Navbar.php") ?>
        <?php include(ROOT_PATH . "/app/components/message_handler.php") ?>
        <!-- Hedaer content -->
        <div class="row">
            <div class="mt-5 d-flex align-items-center" style="height: 90vh;">
                <div style="width: 40%" class="align-items-center col-12 col-sm-6 col-md-5">
                    <h2 style="font-weight: bold; margin-bottom: 15px; color: black" class="animated fadeInDown">Welcome
                        to my Creative Blog the best blog for developper and designer</h2>
                    <span style="color: #636363" class="animated fadeInDown delay-1s">All of the articles have been
                        written
                        with pure simplicity and i'm too fucking tired what i'm i doing with my life right
                        now.</span><br />
                    <a data-scroll href="#articles">
                        <button class="btn animated fadeInDown delay-2s"
                            style="background-color: #006cff; color: white; padding: 15px; font-weight: bold; margin-top: 15px">Let's
                            watch some articles</button>
                    </a>
                </div>
                <div style="width: 60%; height: 100%"
                    class="mt-5 d-flex align-items-center col-12 col-sm-6 col-md-7 d-none d-lg-inline-flex">
                    <img src="https://i.imgur.com/VK04CRx.png" alt="imageHeader" class="d-none d-lg-inline-flex"
                        style="width: 100%; margin-left: 50px" />
                </div>
            </div>
        </div>
        <!-- Carousel articles -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-md-center" style="margin-bottom: 180px">
                        <div class="col-12 col-sm-6 col-md-5 mr-4 mb-4">
                            <a href="article.php?id=<?php echo $posts[4]["id"]; ?>"
                                style="text-decoration : none; color: black" title="<?php echo $posts[4]["title"]; ?>">
                                <img src="<?php echo BASE_URL . "/assets/images/" . $posts[4]["image"]; ?>"
                                    style="height: 450px; width: 450px; border-radius: 15px; object-fit: cover" />
                                <div class="carrousel_content">
                                    <h5 style="font-weight: bold"><?php echo $posts[4]["title"]; ?></h5>
                                    <span><?php echo mb_substr($posts[4]["body"], 0, 200) . " ..."; ?></span>
                                    <p style="font-size: 10px; color: gray; margin-top: 10px">
                                        <?php echo $posts[4]["user_name"]; ?> -
                                        <?php echo date("F j, Y", strtotime($posts[4]["created_at"])); ?></p>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
                <?php foreach ($posts as $post): ?>
                <div class="carousel-item">
                    <div class="row justify-content-md-center" style="margin-bottom: 180px">
                        <div class="col-12 col-sm-6 col-md-5 mr-4 mb-4">
                            <a href="article.php?id=<?php echo $post["id"]; ?>"
                                style="text-decoration : none; color: black" title="<?php echo $post["title"]; ?>">
                                <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?>"
                                    style="height: 450px; width: 450px; border-radius: 15px; object-fit: cover" />
                                <div class="carrousel_content">
                                    <h5 style="font-weight: bold"><?php echo $post["title"]; ?></h5>
                                    <span><?php echo mb_substr($post["body"], 0, 200) . " ..."; ?></span>
                                    <p style="font-size: 10px; color: gray; margin-top: 10px">
                                        <?php echo $post["user_name"]; ?> -
                                        <?php echo date("F j, Y", strtotime($post["created_at"])); ?></p>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Recent topics -->
        <div style="margin-top: 105px" id="articles">
            <h3 style="color: #010116; font-weight: bold">Recent articles </h3>
            <hr />
            <?php foreach ($posts as $post): ?>
            <a href="article.php?id=<?php echo $post["id"]; ?>" style="text-decoration: none"
                title="<?php echo $post["title"]; ?>">
                <div class="d-flex whiteCard hoverCard mt-3 mb-3 align-items-center image-blog" id="articles">
                    <div class="d-none d-lg-inline-flex d-md-inline-flex">
                        <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?>"
                            style="height: 180px; border-radius: 6px" />
                    </div>
                    <div class="ml-3">
                        <h5 style="font-weight: bold; color: #010116, font-size: 15px"><?php echo $post["title"]; ?>
                        </h5>
                        <hr />
                        <span
                            style="color: black; font-size: 15px"><?php echo mb_substr($post["body"], 0, 250) . " ..."; ?></span><br />
                        <p style="font-size: 10px; color: #636363; margin-top: 10px" class="mt-3">
                            <?php echo $post["user_name"]; ?> -
                            <?php echo date("F j, Y", strtotime($post["created_at"])); ?></p>
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
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script>
$('#carousel').carousel({
    interval: 1
});
</script>
<script>
const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    easing: 'easeOutCubic'
});
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
    integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
    integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
</script>

</html>