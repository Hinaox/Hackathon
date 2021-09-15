<style>
    #concent-inscription {
        background-image: url('<?php echo site_url('assets/images/bavladimir-proskurovskiy-T5PvaqELSww-unsplash.jpg') ?>');
        background-repeat: no-repeat;
        background-size: 100%;
        background-color: lightgray;
        background-attachment: fixed;
    }
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
        color : gray;
    }
    input::placeholder {
        color: white;
        opacity: 1;
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
    <div class="container">
        <div id="content-inscription" class="container-bg col-md-6 justify-content-center" style="margin:auto; background-color: rgba(255,255,255,0.375); border=1px solid white;border-radius:10px;">
            <div class="row">
                <div class="" style="margin:auto">
                <br>
                    <h2 style="text-align:center;color:#000" class="h2 border-bottom pb-3 ">Famoronana kaonty</h2>
                    <form action="<?php echo site_url('ClientController/inscription'); ?>" method="post">
                        <div style="display: flex;">
                            <div class="col-md-6">
                                <input type="text" name="nom" placeholder="Anarana" style="font-size: 15px; padding: 4px;" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="prenom" placeholder="Fanampin'Anarana" style="font-size: 15px; padding: 4px;" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" placeholder="Mailaka" style="font-size: 15px; padding: 4px;" />
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="mdp" placeholder="Teny miafina" style="font-size: 15px; padding: 4px;" />
                        </div>
                        
                            <button id="bt_connect_client">
                                Hamorina kaonty
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>