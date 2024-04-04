
function template_header($shopping) {
echo <<<EOT

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>Shopping Cart System</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
                </div>
            </div>
        </header>
        <!doctype html>
        <html lang="fr">
        
        <head>
          <meta charset="utf-8">
        
          <meta name="viewport" content="width=device-width, initial-scale=1">
        
          <title>Fil_Rouge</title>
        
        
          <!--Custom styles for this template -->
        
        
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
          <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
          <script src="tarteaucitron/tarteaucitron.js"></script>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
         <link rel="stylesheet" href="assets/css/camera.css">
          <link rel="stylesheet" href="assets/css/nav.css">
        
        
        
        </head>
        
        
        <body>
        
        <header>
        
        <nav >
  
        <a href="index.php" class="nav-icon justify-content-center" aria-label="homepage" aria-current="page">
                <span ><img  class="Logo justify-content-center position-relative" src="assets/img/images_the_district/the_district_brand/logo_transparent.png"></img>
            
                  </a>
            
                  <div class="main-navlinks">
                    <bouton type="button" class=" toggle m-5" aria-label="Toggle Navigation" aria-expanded="false">
                      <span></span>
                      <span></span>
                      <span></span>
            
                      </button>
            
            
            
                  </div>
                  <div class="navlinks-container col-md-6 d-flex justify-items-center">
            
                  <div class="content-wrapper">

                      <a href="index.php">Home</a>
                      <a href="index.php?page=products">Products</a>
        
                <a class="nav-link " href="index.php" aria-current="page">Accueil</a>
                <a class="nav-link" href="categorie.php">Catégories</a>
                <a class="nav-link" href="plat.php">Plats</a>
                <a class="nav-link" href="contact.php">Contact</a>
        
              </div>
        
            
              <div class="nav-authentication col-md-2 my-auto m-0 d-flex align-items-center vertical-align-center">
            <div class="shopping " >
                  <a href="#"> <i class="fa fa-shopping-cart red "></i> <span class="badge badge-red">0</span></a>
                   
            </div>
         
                 <div class="sign-btns d-block">    <a href="login.php"> 
            
                   
                  <i class="fa fa-sign-in" aria-hidden="true"></i></a> 
                    </div>
          
            
        
            <div class="navtop">
                <div>
                 
                    <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>
        
                    
        
                        <form action="results.php" method="post"accept-charset="utf-8">
                      <input type="text" name="input" class="input" placeholder="Search" />
                      <button type="reset" class="search " id="search-button"> 
                      </form>
                      </button>
                    </div>
                    
            </nav>
         
            </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>