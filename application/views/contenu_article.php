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
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo base_url('controller/ficheArticle'); ?>">
                            <img src="<?php echo site_url("assets/img/feature_prod_02.jpg") ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                           
                            <a href="<?php echo base_url('controller/ficheArticle'); ?>" class="h2 text-decoration-none text-dark">Lavakombarika</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                            </p>
                            <p class="text-muted">Isan ny nijery (48)</p>
                        </div>
                        <p class="text-center"><a href="<?php echo base_url('controller/ficheArticle'); ?>" class="btn btn-success">Hamaky ny tohiny</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo base_url('controller/ficheArticle'); ?>">
                            <img src=" <?php echo site_url("assets/img/feature_prod_03.jpg") ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            
                            <a href="<?php echo base_url('controller/ficheArticle'); ?>" class="h2 text-decoration-none text-dark">Ho avy ny Maraina</a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                            </p>
                            <p class="text-muted">Isan ny nijery (74)</p>
                        </div>
                        <p class="text-center"><a href="<?php echo base_url('controller/ficheArticle'); ?>" class="btn btn-success">Hamaky ny tohiny</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>