<?php




require_once('header.php');





$Currentpage = basename($_SERVER['PHP_SELF']);

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
session_start();
?>  
    
      <div class="parallax">

    
    
        <main class="main-content pt-45">
    
          <h1 class="pt-4 top-45">
            <i class="neon-red">Connexion</i>
            <i class="neon-blue">compte</i>
          </h1>
 
      		<div class="container d-inline-block position-relative pt-5 ">
				<div class="vertical-text">Votre Texte Vertical</div>
			</div>
            <div class="login">
              <h2>Login</h2>
              <form action="authenticate.php" method="post">
                <label for="username">
                  <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                  <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
             
            
              </form>
              <div class="reg mx-auto d-flex vertical-align-baseline justify-content-center align-items-center  ">
              <h5 >Vous n'avez pas de compte :</h5>
         <h4><a href="register.html"> Inscrivez-vous </a></h4>
          </div>
    
            </div>
        

     

    
   
       
            </main>
      </div>

  
    

    <?php



    require_once('footer.php');
    
    ?>