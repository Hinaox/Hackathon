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
                        <p class="afficherDesc">
                        <?php echo $article[$i]['texte']; ?>
                        </p>
                        <p class="text-muted">Isan ny nijery(<?php echo $article[$i]['visites']; ?>)</p>
                    </div>
                    <p class="text-center"><a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>" class="btn btn-success">Hamaky ny tohiny</a></p>
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