
<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Finansal Birim Kayıt Ekranı</h1>
        </div>
    </div>

    <?php $att = array('class' => 'form-horizontal'); ?>
    <?php echo form_open('loginsignup/finans_tanimla', $att); ?>
    <div class="row">
        <div class="col-lg-6">


            <div class="row">
                <div class="col-lg-3">
                    <label  class="control-label">Finansal Birim: </label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="finansadi" />
                </div>   
            </div><br />

            <div class="row">
                <div class="col-lg-3">
                    <label class="control-label">Adres: </label>
                </div>
                <div class="col-lg-6">
                    <textarea name="adres" id="" cols="37" rows="5"></textarea>
                </div>   
            </div><br />




            <div class="row">
                <div class="col-lg-3">
                    <label class="control-label">Telefon: </label>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="( _ _ _ ) _ _ _ _ _ _ _" pattern="\d*" 
                           title="Telefon numaranızı 10 haneli olarak giriniz." 
                           class="form-control"  name="tel"   minlength="10" maxlength="10" required/>
                </div>
            </div><br />




            <div class="row">
                <div class="col-lg-3">
                    <label class="control-label">Fax: </label>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="( _ _ _ ) _ _ _ _ _ _ _" pattern="\d*" 
                           title="Fax numaranızı 10 haneli olarak giriniz." 
                           class="form-control"  name="fax"   minlength="10" maxlength="10" />
                </div>
            </div>  

        </div>

        <div class="col-lg-6">
            <div class="form-group">

                <label class="control-label">Hesap-1 Bilgileri</label><hr />


                <div class="row">
                    <div class="col-lg-2"><label>Banka Adı: </label></div>
                    <div class="col-lg-6"> <input type="text" class="form-control" name="bankaadi" required/></div>


                </div>
                <div class="row">
                    <div class="col-lg-2"><label for="">Şube Adı: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="subeadi" required/></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">Şube Kodu: </label></div> 
                    <div class="col-lg-6"><input type="text" class="form-control" name="subekodu" required/></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">Hesap Numarası: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="hesapno" required/></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">IBAN: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="iban" required/></div>
                </div>

            </div>



            <div class="form-group">

                <label class="control-label">Hesap-2 Bilgileri</label><hr />


                <div class="row">
                    <div class="col-lg-2"><label>Banka Adı: </label></div>
                    <div class="col-lg-6"> <input type="text" class="form-control" name="bankaadi2" /></div>


                </div>
                <div class="row">
                    <div class="col-lg-2"><label for="">Şube Adı: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="subeadi2" /></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">Şube Kodu: </label></div> 
                    <div class="col-lg-6"><input type="text" class="form-control" name="subekodu2" /></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">Hesap Numarası: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="hesapno2" /></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"><label for="">IBAN: </label></div>
                    <div class="col-lg-6"><input type="text" class="form-control" name="iban2" /></div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-2">
                    <?php
                    $att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
                    echo form_submit('submit', 'Kaydet', $att);
                    ?>
                </div>
            </div>

        </div>
    </div>
    <?php echo form_close(); ?>
    <!-- /#page-wrapper -->
</div>

