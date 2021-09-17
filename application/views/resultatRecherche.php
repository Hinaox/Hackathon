<div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Sokajy Boky</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Tantara
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Men</a></li>
                            <li><a class="text-decoration-none" href="#">Women</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Biby
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Zava-boary
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#"></a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-10 pb-4">
                        <h2 class="h2">Valin'ny fikarohana ho an'ny :<?php echo $titre; ?></h2>
                    </div>
                    
                </div>
                <div class="row">
                    <h4 class="h4">Boky mikasika izany</h4>
                    <?php foreach($resultLivre as $livre) { ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="<?php echo site_url("controller/ficheLivre?id=".$livre['idcontenu']."&type=livre");  ?>">
                                <img src="<?php echo site_url("assets/img/").'/'.$livre["photo"].'1.png' ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="<?php echo site_url("controller/ficheLivre?id=".$livre['idcontenu']."&type=livre");  ?>" class="h2 text-decoration-none text-dark"><?php echo $livre["titre"]; ?></a>
                                <p class="card-text">
                                    <?php echo $livre["texte"]; ?>
                                </p>
                                <p class="text-muted">Isan ny nijery(<?php echo $livre["visites"]; ?>)</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
            </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <h4 class="h4">Lahatsoratra</h4>
                    <?php foreach($resultArticle as $article) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                            <a href="<a href="<?php echo site_url("controller/ficheLivre?id=".$article['idcontenu']."&type=article");  ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo site_url("assets/img/").'/'.$article["photo"].'1.png' ?>"></a>
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                            </div>    
                            </div>
                            <div class="card-body">
                                <p style="text-align:center" ><a href="<?php echo site_url("controller/ficheLivre?id=".$article['idcontenu']."&type=article"); ?>" class="h3 text-decoration-none"><?php echo $article["titre"] ?></a></p>
                                <br>
                                <p style="text-align:center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheLivre?id=".$article['idcontenu']."&type=article"); ?>">Hijery</a></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
                
            </div>

        </div>
    </div>
    <!-- End Content -->
