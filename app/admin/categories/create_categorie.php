<?php 
    include("../../../path.php");
    include(ROOT_PATH . "/app/controllers/categories.php");
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "utf-8" />
    <meta
      name    = "viewport"
      content = "width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel         = "stylesheet"
      href        = "https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
      integrity   = "sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX"
      crossorigin = "anonymous"
    />
    <link
      rel  = "stylesheet"
      href = "https://unicons.iconscout.com/release/v2.0.1/css/unicons.css"
    />
    <link
      href = "https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap"
      rel  = "stylesheet"
    />
    <link
      href = "https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css"
      rel  = "stylesheet"
    />
    <link href = "../../../assets/dashboard.css" rel = "stylesheet" />
    <title>Creative Blog - Post section</title>
  </head>

  <body>
  <?php include(ROOT_PATH . "/app/components/navbar_dashboard.php") ?>
    <div  class = "container-fluid">
    <div  class = "row">
    <main role  = "main" class = "col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div
            class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"
          >
            <h1 style = "font-weight: bold">Create categorie</h1>
          </div>
          <a href = "<?php echo BASE_URL . "app/admin/categories/create_categorie.php" ?>" style = "text-decoration: none">
            <button
              class = "btn mr-2"
              style = "background-color: #3941FF; color: white; padding: 15px; font-weight: bold; margin-top: 15px"
            >
              Create Categorie
            </button>
          </a>
          <a href = "<?php echo BASE_URL . "app/admin/categories/categories.php" ?>" style = "text-decoration: none">
            <button
              class = "btn"
              style = "background-color: white; color: black; padding: 15px; font-weight: bold; margin-top: 15px"
            >
              See all the categories
            </button>
          </a>
          <?php include(ROOT_PATH . "/app/components/error_handler_form.php") ?>
          <div   class  = "mt-5">
          <form  action = "create_categorie.php" method = "post">
          <div   class  = "form-group">
          <label for    = "exampleInputEmail1">Name of the categorie</label>
                <input
                  value = "<?php echo $name; ?>"
                  name  = "name"
                  type  = "text"
                  class = "form-control"
                  id    = "exampleInputEmail1"
                />
                <span class = "bmd-help"
                  >Write some great name for better CEO.</span
                >
              </div>
              <div      class = "form-group">
              <label    for   = "exampleTextarea" class = "bmd-label-floating">Description</label>
              <textarea name  = "description" class     = "form-control" id = "exampleTextarea" rows = "5"></textarea>
              </div>
              <button
                name  = "add-categorie"
                type  = "submit"
                class = "btn mr-2"
                style = "background-color: #3941FF; color: white; padding: 15px; font-weight: bold; margin-top: 15px"
              >
                Add the categorie
              </button>
            </form>
          </div>
        </main>
      </div>
    </div>
    <script
      src         = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity   = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin = "anonymous"
    ></script>
    <script
      src         = "https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
      integrity   = "sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
      crossorigin = "anonymous"
    ></script>
    <script
      src         = "https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
      integrity   = "sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
      crossorigin = "anonymous"
    ></script>
  </body>
</html>
