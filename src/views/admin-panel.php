<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Loovies Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/main.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
    <body>

        <!-- DASHBOARD OPTIONS / PRESENTATION -->
        <div class="d-flex" id="wrapper">
            <nav class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <h1>Loovies</h1>
                    <h2>Dashboard</h2>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">New post</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="blog-post.php" class="list-group-item list-group-item-action bg-light">Blog post</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="categories.php" class="list-group-item list-group-item-action bg-light">Categories</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">Customize</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">Informations</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">SETTINGS</a>
                </div>
            </nav>

            <div class="w-100" id="page-content-wrapper">
                <p>New post</p>
                <form action="add-post.php" method="post">
                    <input type="text" name="titre" placeholder="Title">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    <label>Post content</label><br>
                    <textarea class="new-post_textarea" name="text" id="new-post" ></textarea>
                    <button class="btn btn-success">save</button>
                </form>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>