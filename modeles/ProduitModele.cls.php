<?php
class ProduitModele extends AccesBd
{
    /**
     * Retourne tous les produits
     * 
     * @return object[] Un tableau d'objets représentants tous les produits
     */
    public function tout() 
    {
        return $this->lireTout('select produit.id, nom, desc_courte, prix, fichier from produit join produit_image on produit.id = produit_id');

    }

    public function un($param) 
    {
        return $this->lireUn('select produit.*, fichier from produit join produit_image on produit.id = produit_id where produit_id = :produit_id', ['produit_id' => $param]);
    }

    public function categories() 
    {
        return $this->lireTout('select id, nom from categorie order by id');

    }   
    
    public function parCategorie($param)
    {
        return $this->lireTout("SELECT p.id, nom, desc_courte, prix, fichier 
            FROM produit AS p
            JOIN produit_image AS pimg
            ON p.id=pimg.produit_id
            WHERE categorie_id=:catid", ['catid'=>$param]);
    }
}
