<style>
    .publiedBy{
        font-size:14px;
        color:grey;
        text-align:center;
    }
</style>
<div class="row">
    <?php for($i=0;$i<count($video);$i++) {?>
    <div class="col-md-4">  
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"> 
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls="true" class="embed-responsive-item">
                        <source src="<?php echo site_url('assets/video/'.$video[$i]['video']); ?>" type="video/mp4" />
                    </video>
                </div>
            </div>    
        </div>
        <div class="card-body">
            <p style="text-align:center" class="h3 text-decoration-none" ><?php echo $video[$i]['titre']; ?></p>
            <!-- <span  class="publiedBy">Publié par Jean  </span> -->
            
        </div>
    </div>
    <?php }?>
</div>