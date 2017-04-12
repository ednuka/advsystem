
<?php $base = $this->config->item('base_url'); ?>
<div class="col-lg-5 col-md-5 col-sm-5  loginbox">

    <div class=" row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?php echo $base . 'assets/img/logoytu.gif' ?>" alt="Logo" class="logo"> 
        </div>

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  " >
            <div class='row'>
                </br>
                <span class="logotext" >İlan Yayınlama Servisi</span>
            </div>       
        </div>
    </div>

    <div class='row'>
        <span class="singtext" > Kayıt-Firma Bilgileri</span>
    </div>

    <?php
    $att = array('class' => 'form-horizontal');
    echo form_open('loginsignup/firma_tanimla', $att);
    ?>


    <div class=" row loginbox_content ">                        
        <div class="input-group input-group-sm" >



            <div class="input-group input-group-sm" >

                <div class="row">
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Firma Adı: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" class="form-control"  name="firmaadi"   required/>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Sektör: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <select name="sektor" >
                                    <?php foreach ($sektor as $row) { ?>
                                        <option value="<?php echo $row->id; ?>">
                                            <?php echo $row->sektor_tanim; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <br />


                <div class="row">
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Logo: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="file"   name="logo"   />
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Mersis No: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" pattern="\d*" title="Mersis no 16 haneli bir sayı olmalıdır" class="form-control"  name="mersis" maxlength="16" minlength="16"   required/>
                            </div>
                        </div>

                    </div>
                </div>
                <br />


                <div class="row">
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Telefon: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" placeholder="( _ _ _ ) _ _ _ _ _ _ _" pattern="\d*" title="Telefon numaranızı 10 haneli olarak giriniz." class="form-control"  name="tel"   minlength="10" maxlength="10" required/>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="cols-sm-2 control-label">Fax: </label>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" placeholder="( _ _ _ ) _ _ _ _ _ _ _" class="form-control"   pattern="\d*" title="Fax 10 haneli olarak giriniz." minlength="10" maxlength="10" name="fax" />
                            </div>
                        </div>

                    </div>
                </div>
                <br />



                <label class="cols-sm-2 control-label">Web Adresi: </label>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="url" class="form-control"  name="web"   required/>
                    </div>
                </div>
                <br />

                <label class="cols-sm-2 control-label">Açık Adres: </label>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea rows="6" cols="50" type="textarea" class="form-control"  name="adres" required></textarea>
                    </div>
                </div>
                <br />


                <br />


                <div class="row ">                   
                    <div class="col-lg-10 col-md-10  col-sm-10 col-xs-10 forgotpassword "></div>
                    <div class="col-lg-2 col-md-2 col-sm-2  col-xs-2 ">                        
                        <button class="btn-danger"type="submit">Kaydol</button>

                    </div>
                </div>


                <br /><div class='row'>
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 hizasol "> 
                        Hesabınız var mı? <?php echo anchor('login', 'Giriş Yap'); ?>
                    </div>
                </div>


            </div>

            <?php echo form_close(); ?>

            </br>
            <div class='row'>
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 signup "> 
                    Hesabınız var mı? <?php echo anchor('login', 'Giriş Yap'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-7 col-md-7 col-sm-7 "></div>

