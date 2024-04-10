<!-- <?php


// require_once('classes/classe_cat.php');
// require_once('classes/classe_plat.php');

function connect_database () {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=the_district", "admin", "Afpa1234");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}

$conn = connect_database();


$table_cp = "comptes_provisoirs";
$table_cd = "comptes_definitifs";



                                                  //--------------------------------------------------------------------------------
														// INSCRIPTION ET VALIDATAION DE COMPTE PAR MAIL
														//Hawaks le 21 Décembre 2005
														//  ------------------------------------------------------------------------------

//--------------------------------------------
// FORMULAIRE D'INSCRIPTION 
//
// Envoi des données dans la table "comptes_provisoirs" si les conditions sont remplies
// -------------------------------------------

// variable initialisée à zero pour tester les conditions
$nb_faux = 0;


if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['mail']))
{
 $pseudo = $_POST['pseudo'];
 $password = $_POST['password'];
 $confirm_password = $_POST['confirm_password'];
 $mail = $_POST['mail'];
 
	// incrémenter la variable $nb_faux si les champs du formulaire sont  vides 
    if (empty($_POST['pseudo'])  || empty($_POST['password']) || empty($_POST['confirm_password']) || empty($_POST['mail']))
    {         
     ?>Champs non remplis<br/><? 
     $nb_faux++;
    }     
	
	// incrementer la variable $nb_faux si des caracteres ne sont pas autorisés pour le pseudo
    if (!preg_match('`^(\w{4,15})$`', $pseudo))
    {
     ?>Caractères non autorisés pour le pseudo<br/><? 
	 $nb_faux++;
    }
	
	// incrementer la variable $nb_faux si des caracteres ne sont pas autorisés pour le mot de passe et sa confirmation
    if (!preg_match('`^(\w{4,15})$`', $password) or !preg_match('`^(\w{4,15})$`', $confirm_password ))	
	{
	 ?>Caractères non autorisés pour le mot de passe<br/><? 
	 $nb_faux++;
	}
	
	// incrementer la variable $nb_faux si le mot de passe et la confirmation du mot de passe ne sont pas les meme
	if ($password != $confirm_password)
	{
	 ?>Mauvais pass<br/><?
     $nb_faux++;
	}
	
	// incrementer la variable $nb_faux si le pseudo existe dans la base de donnée
	if ($nb_faux >= 0)
	{
	 include("pcdb.php");
	 $connexion = mysql_connect($hote, $utilisateur, $mdp) or die('<br/>Connexion au serveur impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
     $choix_base = mysql_select_db($data_base, $connexion) or die('<br/>Sélection de la base de donnée echouée.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>'); 
	 $requete = "SELECT pseudo FROM $table_cp WHERE pseudo='$pseudo'";
	 $resultat = mysql_query($requete) or die('<br/>Exécution de la requête impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
	 $ligne = mysql_fetch_array($resultat);
	 
	    
        if ($pseudo == $ligne['pseudo'])
	    {
	     ?>Ce pseudo existe déja sur ce site<br/><? 
	     $nb_faux++;
	    }
	}
	
    //  incrémenter la variable $nb_faux si la case à cocher "conditions"  est null         
    if (isset($_POST['conditions']) == null)
    {
     ?>Conditions non coché<br/><? 
     $nb_faux++;	
    }
  	
	// affectation de la chaine "oui" ou "non" dans une variable pour la newsletter
	if (isset($_POST['newsletter']) != null)
    {
     $newsletter = "oui";
    }
	else
	{
	 $newsletter = "non";
	}
	
	if (isset($_POST['pays']) || isset($_POST['ville']) || isset($_POST['sexe']) || isset($_POST['jours']) 
	|| isset($_POST['mois']) || isset($_POST['annees']))
    {   
	 $pays = $_POST['pays'];
     $ville = $_POST['ville'];
     $sexe = $_POST['sexe'];
     $date_naissance = ($_POST['jours']) ."/". ($_POST['mois']) ."/". ($_POST['annees']);
	}
  
    // connexion à la base de donnée si il n'y a pas d'erreur (champs oubliés, expressions régulirères, vérification de mot de passe, vérification du pseudo)
    if ($nb_faux == 0) 
    {   
     include("pcdb.php"); 
	 
	 // affecter un nombre aléatoire dans la variable clef qui servira  a la validation du compte par mail
	 $clef = "0123456789";
     $clef = rand();
		 
     // requette envoi les données de l utilisateur dans la table comptes_provisoirs
     $connexion = mysql_connect($hote, $utilisateur, $mdp) or die('<br/>Connexion au serveur impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
     $choix_base = mysql_select_db($data_base, $connexion) or die('<br/>Sélection de la base de donnée echouée.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>'); 
     $requete = "INSERT INTO $table_cp VALUES
	            ('', '$pseudo', '$password', '$mail', '$newsletter', '$pays', '$ville', '$sexe', '$date_naissance', '$clef')";
     $resultat = mysql_query($requete) or die('<br/>Exécution de la requête impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
     mysql_close($connexion); 
	 
	    // Envoyer le mail si la requête à fonctionnée
	    if ($resultat == true)
		{
	     ?>Vous allez reçevoir un mail pour la validation de votre compte<br/><?
		 
		 $mail_destinataire = $_POST['mail'];             
         $sujet = "jeu, validation de l'inscription";
         $message = "Cet email a été envoyé à partir de http://www.jeu.com Ton mot de passe est: $password \n Ton pseudo est: $pseudo 
            		 Pour valider ton inscription clique sur le lien suivant. Nous te demandons ca  pour s'assurer que l'adresse mail que tu as entrée était correcte.
					 Ceci pour prévenir du spam et des abus. 
					 http://127.0.0.1/Codes/inscription.php?&amp;pseudo=$pseudo&amp;clef=$clef
					 Le Webmaster";
         $head = "Salut $pseudo ";
         mail($mail_destinataire, $sujet, $message, $head);
        }
   } 
}

//--------------------------------------------------------------------
// VALIDATION DU COMPTE APRES INSCRIPTION
//
// Verification du lien de validation via mail :
// 1 - connexion  si la clef et le pseudo existe dans la table "comptes_provisoirs"
// 2 - transfert des données dans la table "comptes_definitifs"
// 3 - suppression des données dans la table "comptes_provisoirs"
//--------------------------------------------------------------------

if (isset($_GET['pseudo']) && isset($_GET['clef']))
{
 $pseudo = $_GET['pseudo'];
 $clef = $_GET['clef'];

 include("pcdb.php"); 
 
 // requette chercher les données lorsque le champs pseudo et le champs clef existent dans la table "comptes_provisoirs"
 $connexion = mysql_connect($hote, $utilisateur, $mdp) or die('<br/>Connexion au serveur impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>'); 
 $choix_base = mysql_select_db($data_base, $connexion) or die('<br/>Sélection de la base de donnée echouée.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>'); 	                                                          
 $requete = "SELECT pseudo, password, mail, newsletter, pays, ville, sexe, date_naissance FROM $table_cp WHERE pseudo = '$pseudo' AND clef = '$clef'";
 $resultat = mysql_query($requete) or die('<br/>Exécution de la requête impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
    
	// affecter les infos utilisateurs si la clef et le pseudo existent dans la table "comptes_provisoirs"
    if($donnees = mysql_fetch_array($resultat))
    {
	 $pseudo = $donnees['pseudo'];
	 $password = $donnees['password'];
	 $mail = $donnees['mail'];
	 $newsletter = $donnees['newsletter'];
	 $pays = $donnees['pays'];
	 $ville = $donnees['ville'];
	 $sexe = $donnees['sexe'];
	 $date_naissance = $donnees['date_naissance'];
	 
	 // requette transferer les données de la table "comptes_provisoirs" à la table "comptes_definitifs"
	 $requete = "INSERT INTO $table_cd VALUES('',  '$pseudo', '$password', '$mail', '$newsletter', '$pays', '$ville', '$sexe', '$date_naissance')";
	 $resultat = mysql_query($requete) or die('<br/>3 Exécution de la requête impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>');
     // requette suppression des données provisoir de la table "comptes_definitifs"
	 $requete = "DELETE FROM $table_cp WHERE clef = '$clef' AND pseudo = '$pseudo'";
	 $resultat = mysql_query($requete) or die('<br/>Exécution de la requête impossible.<br/>Contactez le webmaster si le problème n\'est pas résolu.<br/>'); 
	 mysql_close($connexion); 
	 ?>Votre compte est validé<br/><?
	}
	else
	{
	 ?>Votre compte est deja validé ou le lien de validation est incorrect<br/><?
	}
}

?>

<link rel="stylesheet" media="screen" type="text/css" title="index" href="includes.css" />

<form action="inscription.php" method="post">

Inscription :

<fieldset>
     <legend>Infos obligatoires</legend>
	 
     <table>
         <tr><td>Pseudo :</td><td><input type="text" name="pseudo"/ size="9"></td></tr>
         <tr><td>Mot de passe :</td><td><input type="password" name="password" size="9"/></td></tr>
		 <tr><td>Confirmer le mot de passe :</td><td><input type="password" name="confirm_password" size="9"/></td></tr>
         <tr><td>Mail :</td><td><input type="text" name="mail"/ size="15"></td></tr>
     </table>
     <input type="checkbox" name="conditions"/> J'ai lu et j'accepte les conditions générales d'utilisation de titre (trouver un nom) .<br/>
     <input type="checkbox" name="newsletter" checked="checked"/> Je souhaite recevoir la newletter dans ma boite mail .
</fieldset>

<fieldset>
     <legend>Infos personelles</legend>
	 <table>
	 <tr><td>Pays :</td><td width="170"><input type="text" name="pays" size="15" value="vide"/></td><td>
	 Sexe : <input type="radio" name="sexe" value="homme"/> Homme <input type="radio" name="sexe" value="femme"/> Femme <input type="radio" name="sexe" value="assexué" checked="checked"/> Assexué</td></tr>
	 <tr><td>Ville :</td><td width="170"><input type="text" name="ville" size="15" value="vide"/></td><td>
	 Date de naissance : <select name="jours">
    	                 <option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="O4">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                         </select> /
                         <select name="mois">
    	                 <option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="O4">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                         </select> /
                         <select name="annees">
                         <option></option><option value="1987" >1987</option><option value="1986" >1986</option><option value="1985" >1985</option><option value="1984" >1984</option><option value="1983" >1983</option><option value="1982" >1982</option><option value="1981" >1981</option><option value="1980" >1980</option><option value="1979" >1979</option><option value="1978" >1978</option><option value="1977" >1977</option><option value="1976" >1976</option><option value="1975" >1975</option><option value="1974" >1974</option><option value="1973" >1973</option><option value="1972" >1972</option><option value="1971" >1971</option><option value="1970" >1970</option><option value="1969" >1969</option><option value="1968" >1968</option><option value="1967" >1967</option><option value="1966" >1966</option><option value="1965" >1965</option><option value="1964" >1964</option><option value="1963" >1963</option><option value="1962" >1962</option><option value="1961" >1961</option><option value="1960" >1960</option><option value="1959" >1959</option><option value="1958" >1958</option><option value="1957" >1957</option><option value="1956" >1956</option><option value="1955" >1955</option><option value="1954" >1954</option><option value="1953" >1953</option><option value="1952" >1952</option><option value="1951" >1951</option><option value="1950" >1950</option><option value="1949" >1949</option><option value="1948" >1948</option><option value="1947" >1947</option><option value="1946" >1946</option><option value="1945" >1945</option><option value="1944" >1944</option><option value="1943" >1943</option><option value="1942" >1942</option><option value="1941" >1941</option><option value="1940" >1940</option><option value="1939" >1939</option><option value="1938" >1938</option><option value="1937" >1937</option><option value="1936" >1936</option><option value="1935" >1935</option>
                         </select></td></tr>
	 </table>
</fieldset>

<input type="submit" value="Valider"/>

</form>

 -->
