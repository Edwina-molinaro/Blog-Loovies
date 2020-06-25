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
                    <a href="admin-panel.php" class="list-group-item list-group-item-action bg-light">New post</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="blog-post.php" class="list-group-item list-group-item-action bg-light">Blog post</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="categories.php" class="list-group-item list-group-item-action bg-light">Categories</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="customize.php" class="list-group-item list-group-item-action bg-light">Customize</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">Informations</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action bg-light">SETTINGS</a>
                </div>
            </nav>

            <!-- CATEGORIES ADD / EDIT / DELETE -->
            <div class="w-100" id="page-content-wrapper">
                <p>Categories</p>
                <div class="row  mt-5">
                    <div class="col-2 d-flex justify-content-end">
                        <p>Add a category</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 d-flex justify-content-end">
                        <input type="text" name="category-add">
                    </div>
                     <div class="col-2">   
                        <i class="far fa-check-square"></i>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2 d-flex justify-content-end">
                        <input type="text" value="Animations">
                    </div>
                    <div class="col-1 mt-1 d-flex justify-content-around">
                        <i class="far fa-plus-square"></i>
                        <i class="far fa-trash-alt"></i>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-2 d-flex justify-content-end">
                        <input type="text" value="Poses">
                    </div>
                    <div class="col-1 mt-1 d-flex justify-content-around">
                        <i class="far fa-plus-square"></i>
                        <i class="far fa-trash-alt"></i>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-2 d-flex justify-content-end">
                        <input type="text" value="Builds">
                    </div>
                    <div class="col-1 mt-1 d-flex justify-content-around">
                        <i class="far fa-plus-square"></i>
                        <i class="far fa-trash-alt"></i>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-2 d-flex justify-content-end">
                        <input type="text" value="Tutorials">
                    </div>
                    <div class="col-1 mt-1 d-flex justify-content-around">
                        <i class="far fa-plus-square"></i>
                        <i class="far fa-trash-alt"></i>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2 d-flex justify-content-end">
                        <button class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>