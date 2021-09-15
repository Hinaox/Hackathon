<style>
   
    a {
        color: white;
    }
    h2 {
        color: white;
    }
    label {
        color : gray;
    }
    input {
        color : white;
        border-color: white;
    }
    #bt_connect_client{
        border :1px solid #59ab6e;
        background-color : #59ab6e;
    }
</style>

<section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container" id="contentLogin">
        <div class="row justify-content-center col-md-8 container-bg" style="margin: auto; background-color: rgba(100, 100, 100, 0.5); ">
            <div class="col-md-12" id="client_panel" style="padding: 0;">
                <h2 style="text-align:center" class="h2 text-light border-bottom pb-3 border-light">Se Connecter</h2>
                <div class="col-md-12">
                    <div class="" style="">
                        <div style="">
                            <form action="<?php echo base_url('ClientController/login'); ?>" method="post">
                                <div>
                                    <input id="champ_email_client" name="idPassager" type="email" placeholder="Email" />
                                </div>
                                <div>
                                    <input id="champ_mdp_client" name="mdp" type="password" placeholder="Mot de passe" />
                                </div>
                                <div class="d-flex ">
                                    <button id="bt_connect_client">
                                        SE CONNECTER
                                    </button>
                                </div>
                                <div><?php if(isset($errorLogin)){ echo $errorLogin; } ?></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
          </form>
        </div>
        <p></p>
        <center><a href="<?php echo site_url('Accueil/index')?>">Pas encore membre ? Inscrivez-vous</a></center>
    </div>
</section>
