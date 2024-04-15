<?php

class Categorie {
    public $libelle;
    public $image;
    

    private $id;
    private $active;

    public function __construct($id = null, $libelle = null,  $image = null,  $active = null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->image = $image;
        $this->active = $active;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    // Méthodes pour obtenir et définir la propriété libelle
    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }


    // Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function getActive() {
        return $this->active;
    }

    public function setactive($active) {
        $this->active = $active;
        return $this;
    }
  

    public function afficher_index_page() {
        echo "<h1>" . $this->getLibelle() . "</h1>
        <div>
            <a href='plat_cat.php?id=" . $this->getId() . "'>
            <img class='img-fluid' src='" . $this->getImage() . "'>
            </a>
        </div>";
    }
    

    public function afficher_cat_page() {
        echo "<h2 class='d-flex text-uppercase position-absolute' >"  . $this->getLibelle() . "</h2>
           <div class='accordion-group' id='accordion'  >
            <a href='plat_cat.php?id=" . $this->getId() . "'>
            <img class='img-fluid   ' src='" . $this->getImage() . "'>
            </a>
        </div>";
    }
}