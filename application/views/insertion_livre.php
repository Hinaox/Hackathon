<div class="container py-5">
    <h2 style="text-align:center" class="h2" >Fampidirina Boky</h2>
    <br>
    <hr>
    <div class="row py-5">
        <form class="col-md-9 m-auto" action= "<?php echo site_url('controller/insertBook'); ?>" method="post" role="form" enctype="multipart/form-data">
            <h3 class="h3">Hampiditra sary : </h3>
                <br>
                <div class="row">   
                    <input type="file" name="nomfichier">
                </div>
                <br>  
                <br>
            <h3 class="h3">Hampiditra boky pdf : </h3>
                <br>
                <div class="row">   
                    <input type="file" name="fichier">
                </div>
                <br>  
                <br>
            <h3 class="h3">Hampiditra ny Mombamoban'ny Boky: </h3>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Lohateny</label>
                        <input type="text" class="form-control mt-1" id="name" name="titre" placeholder="Lohateny">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputsubject">Sokajy</label>
                        <!-- <input type="text" class="form-control mt-1" id="subject" name="categorie" placeholder="Sokajy"> -->
                        <select name="categorie" class="form-control mt-1" id="subject">
                            <option>Categories</option>
                            <?php for($i=0;$i<count($categ);$i++) {?>
                            <option value="<?php echo $categ[$i]['nom']; ?>"><?php echo $categ[$i]['nom']; ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputsubject">Mpanoratra</label>
                        <input type="text" class="form-control mt-1" id="subject" name="auteur" placeholder="Mpanoratra">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mombamomba ilay Boky</label>
                    <textarea class="form-control mt-1" id="message" name="texte" placeholder="Famelabelarana" rows="8"></textarea>
                </div>
                <br>
            
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Mampiditra</button>
                </div>
            </div>
        </form>
    </div>
</div>