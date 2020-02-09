<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/posts.php");
    include(ROOT_PATH . "/app/controllers/checkUsers.php");
    userOnly();
    $post = selectOneInTable("posts", ["id" => $_GET["id"]]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>Creative Blog - <?php echo $post["title"] ?></title>
</head>

<body>
    <div style="height: 300px; width: 100vw">
        <img src="<?php echo BASE_URL . "/assets/images/" . $post["image"]; ?>"
            style="width: 100%; object-fit: cover; height: 100%" />
    </div>
    <div class="container">
        <!-- Navbar -->
        <?php include(ROOT_PATH . "/app/components/Navbar.php")  ?>
        <div class="container mt-5">
            <h1 style="font-weight: bold; margin-bottom: 15px; color: black"><?php echo $post['title']; ?></h1>
            <p><?php echo $post["body"]; ?></p>
            <a href="<?php echo BASE_URL ?>" class="btn btn-primary"
                style="background-color: black; font-weight: bold; border: none"><i class='uil uil-document-layout-right'></i> Go back</a>
            <div class="mt-5">
                <strong>Ajoutez moi sur les réseaux sociaux</strong>
                <div class="mt-2">
                    <a href="https://www.linkedin.com/in/ludovic-coulon-b361ba183/" target="_blank"
                        style="text-decoration: none; color: black">
                        <i class='uil uil-linkedin h5'></i>
                    </a>
                    <a href="https://github.com/LasCC" target="_blank" style="text-decoration: none; color: black">
                        <i class='uil uil-github h5'></i>
                    </a>
                    <a href="mailto:coulonludovicc@gmail.com" target="_blank"
                        style="text-decoration: none; color: black">
                        <i class='uil uil-envelope h5'></i>
                    </a>
                </div>
            </div>
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