<section class="bg-light">
        <div class="container py-5">
            <div class="row">
                <?php for($i=0;$i<count($article);$i++) {?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article"); ?>">
                            <img src="<?php echo $articleimage[$i]; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article"); ?>" class="h2 text-decoration-none text-dark"><?php echo $article[$i]['titre']; ?></a>
                            <p class="card-text">
                                <?php echo $article[$i]['texte']; ?>
                            </p>
                            <p class="text-muted">Isan ny nijery(<?php echo $article[$i]['visites']; ?>)</p>
                        </div>
                        <p class="text-center"><a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article"); ?>" class="btn btn-success">Hamaky ny tohiny</a></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>