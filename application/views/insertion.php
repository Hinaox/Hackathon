<?php
  if (!isset($page_insertion) || $page_insertion == null ) {
      $page_insertion = 'utils_insertion';
  }
?>

<div class="container py-5">
    <div class="row">
        <h2 class="h2" style="text-align:center">Safidy ny sokajy hampidirina : </h2>
        <div class="row"><br><hr><br></div>
        
        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
            <a style="text-decoration:none;color:#000;font-size:36px;font-weigth:bold;" href="<?php echo site_url('controller/insertion_livre'); ?>">
                <div class="h1 text-success text-center"><i class="fas fa-book"></i></div>
                <h2 class="h5 mt-4 text-center">Boky</h2>
            </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
            <a style="text-decoration:none;color:#000;font-size:36px;font-weigth:bold;" href="<?php echo site_url('controller/insertion_article'); ?>">
                <div class="h1 text-success text-center"><i class="far fa-newspaper"></i></div>
                <h2 class="h5 mt-4 text-center">Lahatsoratra</h2>
            </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
            <a style="text-decoration:none;color:#000;font-size:36px;font-weigth:bold;" href="<?php echo site_url('controller/insertion_video'); ?>">
                <div class="h1 text-success text-center"><i class="fas fa-file-video"></i></div>
                <h2 class="h5 mt-4 text-center"> Horonan-tsary</h2>
            </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
            <a style="text-decoration:none;color:#000;font-size:36px;font-weigth:bold;" href="<?php echo site_url('controller/insertion_vocal'); ?>">
                <div class="h1 text-success text-center"><i class="fas fa-file-audio"></i></div>
                <h2 class="h5 mt-4 text-center">Horonam-peo</h2>
            </a>
            </div>
        </div>
    </div>
    <?php include($page_insertion.".php") ?>
</div>