
    <div id="conteneur-principal" class="page-produit">
      <section class="detail">

            <?php if(empty($produit)){ ?>
            
            <div class="info">produit inéxistant</div>

            <?php }else{ ?>

                <img src="/ressources/images/produits/<?= $produit->fichier ?>" alt="<?= $produit->nom ?>">
                <div class="info">
                    <p class="nom"><?= $produit->nom ?></p>
                    <p class="sku"><?= $produit->sku ?></p>
                    <p class="desc"><?= $produit->desc_longue ?? $produit->desc_courte ?></p>
                    <p class="couleur"><?= $produit->couleur ?></p>
                    <p class="prix"><?= $produit->prix ?> $</p>
                </div>

            <?php } ?>

        </section>
    </div>
