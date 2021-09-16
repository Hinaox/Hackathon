<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo site_url("assets/img/fokonolona.jpeg") ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Wiki</b> Madagascar</h1>
                                <h3 class="h2">Ny Fokonolona</h3>
                                <p>
                                Ny fokonolona dia mitana toerana lehibe eo amin'ny tantara sy ny rafitry ny finoana ary ny soatoavin'ny vahoaka Malagasy. Ny andrim-panjakana dia manendry ny mpikambana rehetra ao amin'ny fiarahamonina ambanivohitra sy ny fivondronan'izy ireo handaminana ny raharahany isan'andro.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo site_url("assets/img/harena.jpg") ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                            <h1 class="h1 text-success"><b>Wiki</b> Madagasikara</h1>
                                <h3 class="h2">Harena Malagasy</h3>
                                <p>
                                Misahotaka ny manampahaizana ara-tsiansa satria mihavery ny harena voajanahary eto Madagasiraka. Tandindomin-doza ny lazan’i Madagasikara amin’ny maha ivon’ny toerana ivangongon’ny harena voajanahary sy amin’ny maha ivon’ny toerana iarovana ny harena voajanahary azy, raha toa ka tsy misy fepetra faran’izay henjana raisina ho fiarovana azy ireo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo site_url("assets/img/tantara.jpg") ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Wiki</b> Madagasikara</h1>
                                <h3 class="h2">Tantaran'i Madagasikara</h3>
                                <p>
                                Ny tantaran'ny fametrahana an'i Madagasikara dia ny syntheta misy eo amin'ny Vazimba, tompon-tany amin'ny tany afovoany izay tsy dia fantatsika loatra, ary ny Indo-Melanesian sy Bantu dia mikoriana, faharoa ny Indiana sy Arabo, izay nonina tao amin'ny nosy hatramin'ny 1 voalohany Arivotaona hatramin'ny taonjato faha-15 na faha-16
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Lahatsoratra be Mpijery indrindra</h1>
                <p>
                    Ireto ary ny lahatsoratra izay betsaka nitsika indrindra tamin'iny herinandro ity
                </p>
            </div>
        </div>
        <div class="row">
        <?php for($i=0;$i<count($article_visited);$i++) { ?>
              
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="<?php echo site_url("controller/ficheArticle?id=".$article_visited[$i]['idcontenu']."&type=article"); ?>"><img src="<?php echo $article_image[$i] ?>" class="rounded-circle img border" width="200px"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $article_visited[$i]['titre']; ?></h5>
                <p class="text-center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheArticle?id=".$article_visited[$i]['idcontenu']."&type=article"); ?>">Hijery</a></p>
            </div>
         <?php } ?>  
           
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Boky be Mpijery indrindra</h1>
                    <p>
                        Ireto  ny Boky anisan ny be Mpijery ndrindra sy ireo be mpanaraka tam ity herinandro ity 
                    </p>
                </div>
            </div>
            <div class="row">
            <?php for($i=0;$i<count($book_visited);$i++) { ?>
               <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo site_url("controller/ficheLivre?id=".$book_visited[$i]['idcontenu']."&type=livre"); ?>">
                            <img src="<?php echo $nom_image[$i] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                           
                            <a href="<?php echo site_url("controller/ficheLivre?id=".$book_visited[$i]['idcontenu']."&type=livre"); ?>" class="h2 text-decoration-none text-dark"><?php echo $book_visited[$i]['titre']; ?></a>
                            <p class="card-text">
                                <?php echo $book_visited[$i]['texte']; ?>   
                            </p>
                            <p class="text-muted">Isan ny nijery (<?php echo $book_visited[$i]['visites']; ?>)</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>