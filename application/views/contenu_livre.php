<div class="row">
    <?php for($i=0;$i<count($livre);$i++) {?>
    <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo $livreimage[$i]; ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>" class="h3 text-decoration-none"><?php echo $livre[$i]['titre']; ?></a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>">Hijery</a>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['user']) && $_SESSION['user']==$article[$i]['iduser']) {?>
                    <a class="btn btn-danger" style="color:#000" href=""><i class="fas fa-trash-alt"></i></a>
                <?php }?>
                </p>
            </div>
        </div>
    </div>
    <?php }?>
    <!-- <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<a href="<?php echo base_url('controller/ficheLivre'); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo site_url('assets/img/shop_03.jpg'); ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo base_url('controller/ficheLivre'); ?>" class="h3 text-decoration-none">Lavakombarika</a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo base_url('controller/ficheLivre'); ?>">Hijery</a></p>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<a href="<?php echo base_url('controller/ficheLivre'); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo site_url('assets/img/shop_03.jpg'); ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo base_url('controller/ficheLivre'); ?>" class="h3 text-decoration-none">Lavakombarika</a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo base_url('controller/ficheLivre'); ?>">Hijery</a></p>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<a href="<?php echo base_url('controller/ficheLivre'); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo site_url('assets/img/shop_03.jpg'); ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo base_url('controller/ficheLivre'); ?>" class="h3 text-decoration-none">Lavakombarika</a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo base_url('controller/ficheLivre'); ?>">Hijery</a></p>
            </div>
        </div>
    </div>  -->
</div>