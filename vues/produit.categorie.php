<div id="conteneur-principal" class="page-produit">
        <aside>
            <nav>
                <ul>
                <?php foreach ($categories as $categorie) {

                    //J'aime pas cette branche la...
                    $classeCss = '';
                    if($categorie->id == $categorie_id){ 
                        $nomCategorie =  $categorie->nom;
                        $classeCss = 'class="actif"';
                    }
                    ?>

                    <li><a href="/produit/categorie/<?= $categorie->id ?>" <?=  $classeCss ?? '' ?>><?= $categorie->nom ?></a></li>

                <?php } ?>

                </ul>
            </nav>
        </aside>
        <section class="contenu">
        <h2>Produits disponibles par catégorie : &laquo; <?= $nomCategorie ?? 'catégorie non précise' ?> &raquo;</h2>
            <ul>
                
                <?php foreach ($produits as $produit) { ?>
                    
                    <li>
                        <a href="/produit/un/<?= $produit->id ?>">
                            <img src="/ressources/images/produits/<?= $produit->fichier ?>" alt="<?= $produit->nom ?>">
                            <div class="info">
                                <p class="nom"><?= $produit->nom ?></p>
                                <p class="desc"><?= $produit->desc_courte ?></p>
                                <p class="prix"><?= $produit->prix ?>$</p>
                            </div>
                        </a>
                    </li>

                <?php } ?>

            </ul>
        </section>
    </div>