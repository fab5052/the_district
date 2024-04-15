<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta http-equiv="Content-Security-Policy" content="default-src https:; style-src 'self' 'unsafe-inline'; script-src 'self'; script-src-elem 'unsafe-inline' https://www.google.com/recaptcha/api.js https://www.gstatic.com/recaptcha/releases/-QbJqHfGOUB8nuVRLvzFLVed/recaptcha__en.js https://www.animalmetalart.com/js/bootstrap.min.js https://www.animalmetalart.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js https://www.animalmetalart.com/js/mayform.min.js https://www.animalmetalart.com/cdn-cgi/challenge-platform/scripts/jsd/main.js;"> -->

  <title>Fil_Rouge</title>


  <!--Custom styles for this template -->


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="tarteaucitron/css/tarteaucitron.css">
  <link rel="tarteaucitron/css/tarteaucitron.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/style.less"> -->
  <!-- <link rel="stylesheet" href="assets/css/camera.css"> -->


</head>


<body>

  <header>

    <nav>

      <a href="index.php" class="nav-icon justify-content-center" aria-label="homepage">
        <span><img class="Logo justify-content-center position-relative" src="assets/img/images_the_district/the_district_brand/logo_transparent.png"></img></a>

      <div class="main-navlinks">
        <bouton type="button" class=" toggle m-5" aria-label="Toggle" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
          </button>
      </div>

      <div class="navlinks-container col-md-4 d-flex justify-items-center justify-content-between ">

<a  href="index.php">Accueil</a>
<a  href="categorie.php">Catégories</a>
<a  href="plat.php" >Plats</a>
<a href="contact.php">Contact</a>

      </div>

      <div class="nav-authentication col-md-4 d-md-flex d-md-flex  m-3  align-items-center ">
        <a href="profile.php"><i class="fas fa-user-circle  d-sm-block"></i>Profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt d-sm-block "></i>Logout</a>
        <a href="shopping.php"> <i class="fas fa-shopping-cart red p-0 "></i> <span class="badge badge-red p-0">0</span></a>

        <?php if ($_SERVER['PHP_SELF']) :  ?>
          <div id="search">
            <form id="search" method="get" accept-charset="utf-8">
              <input type="text" name="searchTerm" class="input" placeholder="Search" />
              <button type="reset" class="search " id="search-button">
              </button>
            </form>
          <?php endif; ?>
          </div>

      </div>

    </nav>

  </header>