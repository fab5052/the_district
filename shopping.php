<!-- 
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
        
        
       
<?php
require 'header.php';  
?>

<div class="parallax">

    <div class="main-content  ">

<div class="container">
    <div class="row">
    <div class="col-lg-2"></div>

        <div class="col-md-5 ">
        <h2>Vos Coordonnées</h2>
        <?php
        if (isset($_SESSION['panier']) && is_array($_SESSION['panier']))
                $id = array_keys($_SESSION['panier']);
                if (empty($id)) {
                    $membres = array();
                }else{
                    $membres = $DB->query('SELECT * FROM plat WHERE id IN ('.implode(',',$id).')');
                }
                foreach ($plats as $plat):
                ?>
            <div class="coordonnee">
                <p>Nom : <?php echo $membre->nom; ?></p>
                <p>Prénom : <?php echo $membre->prenom; ?></p>
                <p>E-mail : <?php echo $membre->email; ?></p>
                <p>Téléphone : <?php echo $membre->phone; ?></p>
            </div>
        </div>
        <?php  endforeach; ?>
        <div class="col-md-5">
        <h2>Coordonnées Du Club</h2>
            <div class="coordonnee">
                <p>Entente des Abers HB</p>
                <p>6 Résidence Saint Sébastien-29870 Lannilis</p>
                <p>ententedesabers@orange.fr</p>
                <p>Téléphone :</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
        <h2>Votre panier</h2>
        <form method="post" action="panier.php">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Article(s)</th>
                        <th>Quantité</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Total</th>
                        <th><input type="submit" name="recalculer" value="Recalculer" class="btn btn-primary"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $ids = array_keys($_SESSION['panier']);
                if (empty($ids)) {
                    $products = array();
                }else{
                    $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
                }
                foreach ($products as $product):
                ?>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/min/<?php echo $product->id; ?>.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $product->name; ?></a></h4>
                                <h5 class="media-heading"><?php  echo $product->description; ?></h5>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="text" class="form-control" name="panier[quantity][<?php echo $product->id; ?>]" value="<?php echo $_SESSION['panier'][$product->id]; ?>">
                        </td>
                        <td></td>

                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo number_format($product->price,2,',',' '); ?> €</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo number_format($product->price * 1.196,2,',',' '); ?> €</strong></td>
                        <td></td>
                    </tr>
                <?php  endforeach; ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Total HT</h5></td>
                        <td class="text-right"><h5><strong><?php echo number_format($panier->total(),2,',',' ');  ?> €</strong></h5></td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total TTC</h3></td>
                        <td class="text-right"><h3><strong><?php echo number_format($panier->total() * 1.196,2,',',' ');  ?> €</strong></h3></td>
                    </tr>

                </tbody>
            </table>
            </form>
            <a href="order.php" class="btn btn-primary">Version PDF</a>
        </div>
    </div>
</div>

<hr class="featurette-divider">


</main>

</div>


<?php

require_once('footer.php');

?>