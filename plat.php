<?php
require_once('header.php');
?>

<div class="parallax">
    <main class="main-content">
        <h1>
            <script langage="JavaScript1.2">
                var message = "Plats";
                var neonbasecolor = "#8fe9e57c;";
                var neontextcolor = "#9ac74762";
                var neontextcolor2 = "#610606";
                var flashspeed = 200;
                var flashingletters = 3;
                var flashingletters2 = 1;
                var flashpause = 0;

                var n = 0;
                if (document.all || document.getElementById) {
                    document.write('<font color="' + neonbasecolor + '">');
                    for (m = 0; m < message.length; m++)
                        document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>');
                    document.write('</font>');
                } else
                    document.write(message);

                function crossref(number) {
                    var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number);
                    return crossobj;
                }

                function neon() {
                    if (n == 0) {
                        for (m = 0; m < message.length; m++)
                            crossref(m).style.color = neonbasecolor;
                    }
                    crossref(n).style.color = neontextcolor;
                    if (n > flashingletters - 1) crossref(n - flashingletters).style.color = neontextcolor2;
                    if (n > (flashingletters + flashingletters2) - 1) crossref(n - flashingletters - flashingletters2).style.color = neonbasecolor;
                    if (n < message.length - 1)
                        n++;
                    else {
                        n = 0;
                        clearInterval(flashing);
                        setTimeout("beginneon()", flashpause);
                        return;
                    }
                }

                function beginneon() {
                    if (document.all || document.getElementById)
                        flashing = setInterval("neon()", flashspeed);
                }
                beginneon();
            </script>
        </h1>
<?php
require_once('view/view_plat_page.php');
?>

    </main>

<?php
require_once('footer.php');
?>

  <!-- <div class="parallax ">


    <div class="main-content">

      <h1>
        <script langage="JavaScript1.2">
          var message = "Plats" //
          var neonbasecolor = "black" //couleur de base du texte
          var neontextcolor = "#509188"
          var neontextcolor2 = "#C3F1EB"
          var flashspeed = 200 // vitesse du flashing en millisecondes
          var flashingletters = 3 // nombre de lettres qui flashent en neontextcolor
          var flashingletters2 = 2 // nombre de lettres qui flashent en neontextcolor2 (0 pour désactiver)
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




</main>


    </div>

-->

