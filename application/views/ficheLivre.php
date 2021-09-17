<section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo $default_image; ?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0;$i<count($nom_image);$i++) {?>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo $nom_image[$i]; ?>" alt="Product Image".<?php echo $i; ?>>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for($i=0;$i<count($nom_image);$i++) {?>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo $nom_image[$i]; ?>" alt="Product Image".<?php echo $i; ?>>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for($i=0;$i<count($nom_image);$i++) {?>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo $nom_image[$i]; ?>" alt="Product Image".<?php echo $i; ?>>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <?php for($i=0;$i<count($boky);$i++) {?>
                            <h1 class="h2"><?php echo $boky[$i]['titre']; ?></h1>
                            <p class="py-2">
                                <span class="list-inline-item text-dark"> <?php echo $boky[$i]['visites']; ?> olona nijery </span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Sokajy:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $boky[$i]['categories']; ?></strong></p>
                                </li>
                            </ul>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Mpanoratra:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $boky[$i]['auteur']; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Mombamomba:</h6>
                            <p><?php echo $boky[$i]['texte']; ?></p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Boky pdf:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $boky[$i]['pdf']; ?></strong></p>
                                </li>
                            </ul>


                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row pb-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                                <div class="col d-grid">
                                                  <a href="<?php echo site_url('assets/pdf/'.$boky[$i]['pdf']); ?>">
                                                    <button class="btn btn-success btn-lg" name="submit" value="regarder">Mijery</button>
                                                  </a>
                                                </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <form action="<?php echo site_url('Controller/download') ?>" method="post">
                                                <div class="col d-grid">
                                                    <button type="submit" class="btn btn-success btn-lg" name="download" value="<?php echo $boky[$i]['pdf']; ?>">Maka</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>


                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
