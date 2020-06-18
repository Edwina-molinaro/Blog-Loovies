<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loovies Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
    <body>

        <!-- CAROUSEL + LOGO MULTI LANGUAGES -->
        <div class="row col-12 multi-language d-flex justify-content-end align-items-center">
          <p>Langues logo</p>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="src/img/sky.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="src/img/balloon.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- NAVBAR CAROUSEL -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
              </li>
               <li class="nav-item">
                 <a class="nav-link" href="src/views/blog.php"><i class="fas fa-laptop"></i>Blog</a>
               </li>
               <li class="nav-item">
                <a class="nav-link"  href="src/views/download.php"><i class="fas fa-cloud-download-alt"></i>Download</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i>Tutorials</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fas fa-at"></i>Contact&Faq</a>
               </li>
             </ul>
          </div>
        </nav>


        <!-- LAST POST TITLE / ICON ARROW -->
        <div class="row col-12 d-flex justify-content-center mt-5 title-padding">
          <h2>Last post</h2>
        </div>
        <div class="row col-12 d-flex justify-content-center">
          <i class="fas fa-sort-down arrow-last_post"></i>
        </div>

        <!-- LAST POST PICTURE + TITLE -->
        <div class="row">
          <div class="col-6 post-section_home mt-5 d-flex justify-content-end">
            <img src="src/img/balloon.jpg" class="mt-5" alt="...">
          </div>

          <div class="col-3 post-section_home mt-5 d-flex justify-content-start flex-column">
            <h3 class="mt-5">Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur erat, ac ornare orci
               Proin scelerisque venenatis pretium. Mauris congue suscipit lectus et aliquam.</p>
               <button type="button" class="btn btn-outline-info">See more</button>
          </div>
        </div>

        <div class="row">
          <div class="col-6 post-section_home mt-5 d-flex justify-content-end">
            <img src="src/img/balloon.jpg" class="mt-5" alt="...">
          </div>

          <div class="col-3 post-section_home mt-5 d-flex justify-content-start flex-column">
            <h3 class="mt-5">Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur erat, ac ornare orci
               Proin scelerisque venenatis pretium. Mauris congue suscipit lectus et aliquam.</p>
               <button type="button" class="btn btn-outline-info">See more</button>
          </div>
        </div>

        <!-- BTN PREVIOUS / NEXT -->

        <div class="row">
          <div class="col-6 d-flex justify-content-center align-items-center link-btn_home">
            <button class="btn">Previous</button>
          </div>
          <div class="col-6 d-flex justify-content-center align-items-center link-btn_home">
            <button class="btn">next</button>
          </div>
        </div>

        <hr>

        <!-- FOOTER -->

        <div class="blog-footer">
          <div class="row row-cols-2">
            <h3 class="d-flex justify-content-center">Youtube</h3>
            <h3 class="d-flex justify-content-center">Instagram</h3>
          </div>

          <div class="row row-cols-2">
            <div class="footer-img d-flex justify-content-center">
              <img src="src/img/youtube.png" alt="">
            </div>
            <div class="footer-img d-flex justify-content-center">
             <img src="src/img/instagram.png" alt="">
            </div>
          </div>

          <div class="copyright d-flex justify-content-center align-items-end">
            <h4>Copyright @loovies - 2020</h4>
          </div>
        </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>