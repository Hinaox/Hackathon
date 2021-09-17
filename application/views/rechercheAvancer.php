<div class="container py-5">
    <div class="row py-5">
        <div class="col-md-9 m-auto">
            <h2 style="text-align:center" class="h2"><i class="fas fa-search"></i>  Fikaroana antsipirihiny</h2>
            <div class="col-md-6 m-auto">
                <hr>
            </div>
            <form action="<?php echo site_url('Controller/result')?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputname">Lohateny</label>
                            <input type="text" class="form-control mt-1" id="name" name="titre" placeholder="Lohateny">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputname">Sokajy : </label>
                            <select class="form-control mt-1" name="cat">
                                <?php foreach($cat as $c) { ?>
                                    <option value="<?php echo $c["nom"]; ?>"><?php echo $c["nom"]; ?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputsubject">Mpanoratra</label>
                            <input type="text" class="form-control mt-1" id="subject" name="auteur" placeholder="Mpanoratra">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inputname">Daty : </label>
                            <select class="form-control mt-1" name="daty">
                                <option value="<?php echo 7 ?>" >7 andro lasa</option>
                                <option value="<?php echo 2 ?>" >2 andro lasa</option>
                                <option value="<?php echo 1*60 ?>" >1 volana</option>
                                <option value="<?php echo 3*60 ?>" >3 volana</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputmessage">Mombamomba ilay hotadiavina : </label>
                        <textarea class="form-control mt-1" id="message" name="texte" placeholder="Mombamomba izay karohina " rows="5"></textarea>
                    </div>
                    <input class="btn btn-success btn-lg px-3" type="submit" value="Mikaroka">
            </form>
        </div>
    </div>
</div>