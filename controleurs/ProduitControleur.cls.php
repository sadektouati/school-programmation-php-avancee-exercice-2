<?php
class ProduitControleur extends Controleur
{
    /**
     * Méthode invoquée par défaut si aucune action n'est indiquée
     */
    public function index($params)
    {
        $this->gabarit->affecterActionParDefaut('tout');
        $this->tout($params);

    }

    // route : produit/tout
    public function tout() {
        $produits = $this->modele->tout();
        $this->gabarit->affecter('produits', $produits);

        $categories = $this->modele->categories();
        $this->gabarit->affecter('categories', $categories);

    }

        // route : produit/tout
    public function un($params) {

        $produit = $this->modele->un($params[0]);
        $this->gabarit->affecter('produit', $produit);

    }

    // route : produit/tout
    public function categorie($params) {
        $produits = $this->modele->parCategorie($params[0]);
        $this->gabarit->affecter('produits', $produits);

        $categories = $this->modele->categories();
        $this->gabarit->affecter('categories', $categories);
        $this->gabarit->affecter('categorie_id', $params[0]);
    }

}
