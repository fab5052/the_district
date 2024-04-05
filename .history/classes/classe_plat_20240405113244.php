<?php



class Plat {
    private $id;    
    public $libelle;
    public $description;
    public $prix;
    public $image;
    public $id_categorie;
    public $active;

   
    public function __construct($id = null, $libelle = null, $description= null, $image = null, $prix = null, $id_categorie = null, $active =null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->image = $image;
        $this->prix = $prix;
        $this->id_categorie = $id_categorie;
        $this->active = $active;

    }

  // Méthodes pour obtenir et définir la propriété id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
            return $this;
    }


    public function getPlatId($plat_id) {
        $this->id = $plat_id;
            return $this;
    }


// Méthodes pour obtenir et définir la propriété description
    public function getDescription() {
        return $this->description;
    }

    
// Méthodes pour obtenir et définir la propriété libelle
public function getLibelle() {
    return $this->libelle;
}


// Méthodes pour obtenir et définir la propriété prix
    public function getPrix() {
        return $this->prix;
}

    
// Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return $this->image;
    }


// Méthodes pour obtenir et définir la propriété id_categorie
    public function getIdCategorie() {
        return $this->id_categorie;
    }

     

    public function afficher_plat_index() {
        echo "<h3>". $this->getLibelle() ."</h3>
        <div>
        <a href='commande.php?id=".$this->getId()."'>
        <img class='img-fluid ' src ='" . $this->getImage() . "'>
        </a>
        </div>";
    }

    public function afficher_plat_view() {
        $categorie = get_categorie($this->getIdCategorie())[0];
        echo "<div>
        <img class=' img-fluid' src ='".$this->getImage()."' alt='Image de ".$this->getLibelle()."'>
        <div class= class='card-plat col-md-6'>
            <h2 class='card-title'>".$categorie->getLibelle()." / ".$this->getLibelle()."</h2>
            <p class='card-text'>".$this->getDescription()."</p>
            <h6 class='card-subtitle mb-2'>Prix: ".$this->getPrix()."</h6>
            <a href='commande.php?id=".$this->getId()."' class='btn btn-danger btn-sm'>Commander</a>
        </div>
      </div>";

    }


    public function afficher_plat_page()  {
         $this->afficher_plat_view();
    }



    public function afficher_plat_cat() {
         $this->afficher_plat_view();
    }


   
    

    public function afficher_plat_commande() {
        
        echo "<h6>". $this->getLibelle() ."</h6>
        <div class='card mx-auto col-8 col-md-6'>
        <img class='mx-auto img-fluid' src ='".$this->getImage()."'>
        <div class='card-body'>
        <p>".$this->getDescription()."</p>
        <p>".$this->getPrix()."€"."</p>
        </div></div>";
        
    

}
}
