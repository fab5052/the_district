<!--  -->

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
