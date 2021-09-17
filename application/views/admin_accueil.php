<div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h4 text-dark text-decoration-none mr-4" href="<?php echo site_url('controller/contenu_livre'); ?>"><i class="fas fa-book"></i> Boky</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h4 text-dark text-decoration-none mr-4" href="<?php echo site_url('controller/contenu_article'); ?>"><i class="far fa-newspaper"></i> Lahatsoratra</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h4 text-dark text-decoration-none mr-4" href="<?php echo site_url('controller/contenu_video'); ?>"><i class="fas fa-file-video"></i> Horonan-Tsary</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h4 text-dark text-decoration-none mr-4" href="<?php echo site_url('controller/contenu_audio'); ?>"><i class="fas fa-file-audio"></i> Horonam-peo</a>
                            </li>
                        </ul>
                        <hr>
                        <br>
                    </div>
                </div>
                <section class="bg-light">  
    <div class="container py-5">
        <div class="row">
            <?php for($i=0;$i<count($article);$i++) {?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>">
                        <img src="<?php echo site_url("assets/img/feature_prod_01.jpg") ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>" class="h3 text-decoration-none text-dark"><?php echo $article[$i]['titre']; ?></a>
                        <hr>
                        <!-- <?php if($article[$i]['etat']=="done") { ?>
                            <p class="text-muted">Status :<?php echo "Public" ?></p>
                        <?php }else {?>
                            <p class="text-muted">Status :<?php echo "Privée" ?></p>
                        <?php }?> -->

                        <p class="text-muted">Isan ny nijery(<?php echo $article[$i]['visites']; ?>)</p>
                    </div>
                    <div class="row">
                        <div class="col md-6">
                            <a class="btn btn-success" href="#">Rendre Public</a>
                        </div>
                        <div class="col md-6">
                            <a class="btn btn-dark" href="#">Rendre Privée</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
        </section>
            <br>
            <br>
            <h2 class="h2">Ny Boky </h2>
            <hr>
            <br>
            <br>
        <div class="row">
            <?php for($i=0;$i<count($livre);$i++) {?>
            <div class="col-md-4">   
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo site_url('assets/img/shop_03.jpg'); ?>"></a>
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white mt-2" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><i class="far fa-eye"></i></a></li>
                            </ul>
                    </div>    
                    </div>
                    <div class="card-body">
                        <p style="text-align:center" ><a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>" class="h3 text-decoration-none"><?php echo $livre[$i]['titre']; ?></a></p>
                        <br>
                        <p style="text-align:center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>">Hijery</a></p>
                    </div>
                </div>
            </div>
            <?php }?> 
        </div>
        <br>
        <hr>
        <br>
        <br>
        <div class="row">
            
            <div class="col-md-4">  
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0"> 
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls="true" class="embed-responsive-item">
                                <source src="<?php echo site_url('assets/video/afindrafindrao.mp4'); ?>" type="video/mp4" />
                            </video>
                        </div>
                    </div>    
                </div>
                <div class="card-body">
                    <p style="text-align:center" class="h3 text-decoration-none" >Afindrafindrao</p>
                    <span  class="publiedBy">Publié par Jean  </span>
                    
                </div>
            </div>
            <div class="col-md-4">  
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0"> 
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls="true" class="embed-responsive-item">
                                <source src="<?php echo site_url('assets/video/afindrafindrao.mp4'); ?>" type="video/mp4" />
                            </video>
                        </div>
                    </div>    
                </div>
                <div class="card-body">
                    <p style="text-align:center" class="h3 text-decoration-none" >Famadihana</p>
                    <span  class="publiedBy">Publié par Fama </span>
                    
                </div>
            </div>
        </div>

                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="<?php echo site_url('Controller/contenu_article?pg=1') ?>" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="<?php echo site_url('Controller/contenu_article?pg=2') ?>">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="<?php echo site_url('Controller/contenu_article?pg=3') ?>">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>