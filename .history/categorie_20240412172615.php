
<?php 

require_once('header.php');


?>



<div class="parallax" style="background-image: url('assets/img/parallax/clown.jpeg')">


<main class="main-content">


        <h1 > 
          <script langage="JavaScript1.2">
                    var message = "Catégories" //
                    var neonbasecolor = "#8fe9e57c;" //couleur de base du texte
                    var neontextcolor = "#9ac74762"
                    var neontextcolor2 = "#610606"
                    var flashspeed = 200 // vitesse du flashing en millisecondes
                    var flashingletters = 3 // nombre de lettres qui flashent en neontextcolor
                    var flashingletters2 = 1 // nombre de lettres qui flashent en neontextcolor2 (0 pour désactiver)
                    var flashpause = 0 // pause entre les cycles de flashing en millisecondes
                    ///Ne rien toucher sous cette ligne///
                    var n = 0
                    if (document.all || document.getElementById) {
                      document.write('<font color="' + neonbasecolor + '">')
                      for (m = 0; m < message.length; m++)
                        document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>')
                      document.write('</font>')
                    } else
                      document.write(message)
              
                    function crossref(number) {
                      var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number)
                      return crossobj
                    }
              
                    function neon() {
                      //Change all letters to base color
                      if (n == 0) {
                        for (m = 0; m < message.length; m++)
                          crossref(m).style.color = neonbasecolor
                      }
                      //cycle through and change individual letters to neon color
                      crossref(n).style.color = neontextcolor
                      if (n > flashingletters - 1) crossref(n - flashingletters).style.color = neontextcolor2
                      if (n > (flashingletters + flashingletters2) - 1) crossref(n - flashingletters - flashingletters2).style.color = neonbasecolor
                      if (n < message.length - 1)
                        n++
                      else {
                        n = 0
                        clearInterval(flashing)
                        setTimeout("beginneon()", flashpause)
                        return
                      }
                    }
              
                    function beginneon() {
                      if (document.all || document.getElementById)
                        flashing = setInterval("neon()", flashspeed)
                    }
                    beginneon()
                  </script>
      </h1>

  <!--    <div class="featured my-auto">
    <h2>Menu</h2>
    <p>Decouvrez toutes nos catégories de plats</p>
</div> 
<div class="recentlyadded content-wrapper">
    <h2>Plats</h2>
    <div class="products">
      <section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
  <div>
</section>-->




<div class="container-fluid margin-none p-0 position-relative w-100 ">
      
<ul class="accordion-group" id="accordion"> 
       <li class='d-none ">     
    

<?php


require_once('view/view_index_cat.php');

?>

</li>
  </ul>

 
    <h2 class="text-center ">Qualite des services</h2>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">Les clients passent en premiers</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">Smart design</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">Modern or retro</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>


      






      </div>


</main>

</div>
<?php

require_once('footer.php');

?>



