<style>
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
    #bt_connect_client:hover{
        color : #000;
    }
</style>

<section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container" id="contentLogin">
        <div class="row justify-content-center col-md-6 container-bg" style="margin: auto; background-color: white; border=1px solid white;border-radius:10px; ">
            <div class="col-md-12" id="client_panel" style="padding: 0;">
            <br>
                <h2 style="text-align:center" class="h2  border-bottom pb-3 ">Miditra</h2>
                <div class="col-md-12">
                    <div class="" style="">
                        <div style="">
                            <form action="<?php echo base_url('Controller/authentification'); ?>" method="post">
                                <div>
                                    <input id="champ_email_client" name="email" placeholder="Mailaka" />
                                </div>
                                <div>
                                    <input id="champ_mdp_client" name="mdp" type="password" placeholder="Teny Miafina" />
                                </div>
                                <?php if (isset($erreur)) 
                                {
                                    echo $erreur;
                                }    
                                ?>
                                <div class="d-flex ">
                                    <button id="bt_connect_client">
                                        Miditra
                                    </button>
                                    
                                </div>
                                
                            </form>
                            <center><a href="<?php echo site_url('controller/inscription')?>">Tsy Mbola manana kaonty ? Hamorina</a></center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            
            
          </form>
        </div>
        <p></p>
        
    </div>
</section>
