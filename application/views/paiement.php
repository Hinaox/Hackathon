<div class="container">
    <br>
    <div class="row container-bg justify-content-center">
        
        <div class="col-md-6"style="background-color: rgba(245,245,251); padding: 30px; border-radius: 15px; border: 1px solid rgb(150,250,245);">
            <?php if(isset($error)){ ?>
            <p class="alert alert-danger"><?php echo $error ?></p>
            <?php }else if(isset($succes)){ ?>
            <p class="alert alert-success"><?php echo $succes ?></p>
            <?php } ?>

            <h2>Achat</h2>

            <form action="<?php echo site_url('ChauffeurController/depot');?>" method="post">

            <div style="display: flex; flex-wrap: nowrap; margin-top: 40px;">
                <label style="margin-right: 10px;" class="col-form-label">Coin : </label>
                <input style="margin-right: 5px;" id="champ_nb_coin" type="number" min="0" value="0" name="valeur">
                <button style="margin-right: 2px;" class="btn btn-danger" id="minus_bt">-</button>
                <button class="btn btn-success" id="plus_bt">+</button>
            </div>
            <div style="display: flex; justify-content: space-between; margin-top: 45px;">
                <p>Total :</p>
                <p>MGA <span id="prix_total">10.0</span></p>
            </div>
            <hr style="margin-top: 0;">
            <label style="margin-top: 20px;">Moyen de paiement</label>
            <div style="margin-top: 0;">
                <input type="radio" name="moyen">
                <img src="<?php echo site_url('assets/images/visa.png'); ?>" class="icone">
                <img src="<?php echo site_url('assets/images/mastercard.png'); ?>" class="icone">
                <input type="radio" name="moyen">
                <img src="<?php echo site_url('assets/images/paypal.png'); ?>" class="payp">
            </div>


            <button type="submit" style="margin-top: 40px;" class="btn btn-secondary">Confirmer l'achat</button>
            </form>

            

        </div>
    </div>
    <br>
</div>