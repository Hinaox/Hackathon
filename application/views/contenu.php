<?php
  if (!isset($page_contenu) || $page_contenu == null ) {
      $page_contenu = 'contenu_accueil';
  }
?>

<div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Sokajin'Tahiry</h1>
                <ul class="list-unstyled templatemo-accordion">

                        <!-- <li class="pb-3"> -->
                        <?php for($i=0;$i<count($categ);$i++) {?>

                            <i class="<?php echo $categ[$i]['icone']; ?>"></i>

                            <a style="text-decoration:none" href="<?php echo site_url("controller/contentCat?categ=".$categ[$i]['nom']); ?>">
                            <?php echo $categ[$i]['nom']; ?>
                            </a>

                        
                            <hr>
                        <?php }?>
                        <!-- </li> -->
                </ul>
            </div>

            <div class="col-lg-9">
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
                    <div class="col-md-2 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Filaharana</option>
                                <option>A hatramin ny Z</option>
                                <option>Daty</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php include($page_contenu.".php") ?>

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
    <!-- End Content -->

    <!-- Start Brands -->