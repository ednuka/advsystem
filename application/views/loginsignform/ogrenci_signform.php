
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
        <span class="singtext" > Kayıt-Öğrenci Bilgileri</span>
    </div>

    <?php
    $att = array('class' => 'form-horizontal');
    echo form_open('loginsignup/ogrenci_tanimla', $att);
    ?>


    <div class=" row loginbox_content ">                        
        <div class="input-group input-group-sm" >



            <div class="input-group input-group-sm" >



                <label class="cols-sm-2 control-label">İlgilendiğiniz başlıktaki ilanlardan sizi haberdar edelim: </label>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">

                        <ul id="menu">
                            <?php foreach ($listMenuLevel1 as $menu1) { ?>
                                <li><input type="checkbox" name="kategori" value="<?php echo $menu1->id; ?>" /><?php echo $menu1->ilan_tanim; ?>
                                    <?php if (count($this->menumodel->listChildMenus($menu1->id)) > 0) { ?>
                                        <ul>
                                            <?php foreach ($this->menumodel->listChildMenus($menu1->id) as $menu2) { ?>
                                                <li><input type="checkbox" name="kategori" value="<?php echo $menu2->id; ?>" /><?php echo $menu2->ilan_tanim; ?>
                                                    <?php if (count($this->menumodel->listChildMenus($menu2->id)) > 0) { ?>
                                                        <ul>
                                                            <?php foreach ($this->menumodel->listChildMenus($menu2->id) as $menu3) { ?>
                                                                <li><input type="checkbox" name="kategori" value="<?php echo $menu3->id; ?>" /><?php echo $menu3->ilan_tanim; ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>


            </div>
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

