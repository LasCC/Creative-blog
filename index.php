<?php 
  include("path.php");
  include(ROOT_PATH . "/app/controllers/categories.php");
  $posts = getPublishedUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.0.1/css/unicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/styles.css">
    <title>Creative Blog</title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . "/app/components/Navbar.php") ?>
        <?php include(ROOT_PATH . "/app/components/message_handler.php") ?>
        <!-- Hedaer content -->
        <div class="mt-5 d-flex align-items-center" style="height: 90vh;">
            <div style="width: 40%" class="align-items-center">
                <h2 style="font-weight: bold; margin-bottom: 15px; color: #0D0B6D">Welcome to my Creative Blog the best blog for developper and designer</h2>
                <span style="color: #8887B7">All of the articles have been written with pure simplicity and i'm too fucking tired what i'm i doing with my life right now.</span><br />
                <button class="btn" style="background-color: #3941FF; color: white; padding: 15px; font-weight: bold; margin-top: 15px">Let's watch some articles</button>
            </div>
            <div style="width: 60%; height: 100%">
                <img src="https://svgur.com/i/HMj.svg" alt="imageHeader" style="height: 100%" />
            </div>
        </div>
        <!-- Grid layout articles -->
        <div class="row justify-content-md-center" style="height: 80vh; margin-top: 105px" id="articles">
            <div class="col-5 blueCard mr-4 mb-4 hoverCard">
                <h5 style="font-weight: bold"><?php echo $posts[0]["title"]; ?></h5>
                <span><?php echo $posts[0]["body"]; ?></span>
                <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $posts[0]["user_name"]; ?> - <?php echo date("F j, Y", strtotime($posts[0]["created_at"])); ?></p>
                <a href="article.php?id=<?php echo $posts[0]["id"]; ?>">
                    <button class="btn" style="color : white; border-bottom: 2px solid; border-color : white">En savoir plus</button>
                </a>
            </div>
            <div class="col-5 whiteCard mr-4 mb-4 hoverCard">
                <h5 style="font-weight: bold"><?php echo $posts[1]["title"]; ?></h5>
                <span><?php echo $posts[1]["body"]; ?></span>
                <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $posts[1]["user_name"]; ?> - <?php echo date("F j, Y", strtotime($posts[1]["created_at"])); ?></p>
                <a href="article.php?id=<?php echo $posts[1]["id"]; ?>">
                    <button class="btn" style="color : #3941FF; border-bottom: 2px solid; border-color : #3941FF">En savoir plus</button>
                </a>
            </div>
            <div class="col-5 whiteCard mr-4 mb-4 hoverCard">
                <h5 style="font-weight: bold"><?php echo $posts[2]["title"]; ?></h5>
                <span><?php echo $posts[2]["body"]; ?></span>
                <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $posts[2]["user_name"]; ?> - <?php echo date("F j, Y", strtotime($posts[2]["created_at"])); ?></p>
                <a href="article.php?id=<?php echo $posts[2]["id"]; ?>">
                    <button class="btn" style="color : #3941FF; border-bottom: 2px solid; border-color : #3941FF">En savoir plus</button>
                </a>
            </div>
            <div class="col-5 blueCard mr-4 mb-4 hoverCard">
                <h5 style="font-weight: bold"><?php echo $posts[3]["title"]; ?></h5>
                <span><?php echo $posts[3]["body"]; ?></span>
                <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $posts[3]["user_name"]; ?> - <?php echo date("F j, Y", strtotime($posts[3]["created_at"])); ?></p>
                <a href="article.php?id=<?php echo $posts[3]["id"]; ?>">
                    <button class="btn" style="color : white; border-bottom: 2px solid; border-color : white">En savoir plus</button>
                </a>
            </div>
            <button class="btn" style="height: 45px; border: 2px solid #3941FF; background-color: transparent; border-radius: 45px; font-weight: bold;">See more articles</button>
        </div>
        <div class="d-flex mb-5 mt-5">
            <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1532153955177-f59af40d6472?ixlib=rb-1.2.1&auto=format&fit=crop&w=1234&q=80); height: 255px; width: 25%; border-radius: 10px">
                <div class="p-4">
                    <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[0]["name"]; ?></h1>
                </div>
            </div>
            <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: center">
                <div class="p-4">
                    <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[1]["name"]; ?></h1>
                </div>
            </div>
            <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: center">
                <div class="p-4">
                    <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[2]["name"]; ?></h1>
                </div>
            </div>
            <div class="ml-3 hoverCard" style="background-image: url(https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80); height: 255px; width: 25%; border-radius: 10px; background-position: left">
                <div class="p-4">
                    <h1 style="font-weight: bold; color: white; font-size: 17px"><?php echo $categories[3]["name"]; ?></h1>
                </div>
            </div>
        </div>
        <!-- Recent topics -->
        <div style="margin-top: 105px">
            <h3 style="color: #010116; font-weight: bold"><u style="text-decoration-color: #3941FF">Recent articles</u></h3>
            <?php foreach ($posts as $post): ?>
            <a href="article.php?id=<?php echo $post["id"]; ?>" style="text-decoration: none">
                <div class="d-flex whiteCard hoverCard mt-3 mb-3 align-items-center">
                    <div>
                        <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?>" style="height: 180px; border-radius: 6px" />
                    </div>
                    <div class="ml-3">
                        <h5 style="font-weight: bold; color: #010116"><?php echo $post["title"]; ?></h5>
                        <span style="color: #8887B7"><?php echo mb_substr($post["body"], 0, 150) . "..."; ?></span><br />
                        <p style="font-size: 10px; color:#8887B7; margin-top: 10px"><?php echo $post["user_name"]; ?> - <?php echo date("F j, Y", strtotime($post["created_at"])); ?></p>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
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
        <p class = " text-center m-3" style="color: #8887B7; font-size: 10px">@Ludovic COULON - 2020</p>
            </div>
        </div>
</body>
<script src="./assets/scroll.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</html>