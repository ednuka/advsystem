
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
        <span class="singtext" > Kayıt Ol</span>
    </div>

    <?php echo form_open('loginsignup/uye_ileri'); ?>

    <div class=" row loginbox_content ">                        
        <div class="input-group input-group-sm" >
            <h5>Ad:</h5>  
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

                    <input type="text" class="form-control" name="isim" placeholder="isim" required/>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <input type="text" class="form-control" name="soyisim" placeholder="soyisim" required/>
                </div> 
            </div>
            <br />

            <h5>e-posta Hesabı:</h5>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input title="eposta hesabınız someone@mail.com formatında olmalıdır."type="email" class="form-control"  name="email"  placeholder="someone@mail.com" required/>
                </div>
            </div>
            <br />

            <h5>Şifre Oluşturun:</h5>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input type="password"  title="Parolanız en az 6 karakter,büyük harf, küçük harf ve numara içermelidir!"class="form-control" name="parola1" 
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="form.parola2.pattern = this.value;" 
                           minlength="6" maxlength="20" required/>
                </div>
            </div>
            <br />

            <h5>Şifre Onaylayın:</h5>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input type="password" title="Lütfen üstte belirlediğiniz parolanın aynısını giriniz! " 
                           class="form-control" name="parola2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                           minlength="6" maxlength="20" required/>
                </div>
            </div>  

            <h5>Uye tipini seçiniz:</h5>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <select name="uyetip">
                      

                            <option value="4">
                                Firma
                            </option>
                        <option value="5">
                                Öğrenci
                            </option>
                    </select>
                </div>
            </div>  
        

        <div class="row ">                   
            <div class="col-lg-8 col-md-8  col-sm-8 col-xs-7" padding-left="%10"></div>
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5 ">                        
                <?php //echo form_submit('submit', 'İleri >'); ?>
                <button class="btn-danger" type="submit">İleri</button>
                
            </div>
        </div>




        <?php echo form_close(); ?>

        </br>
        <div class='row'>
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 signup "> 
                Hesabınız var mı? <?php echo anchor('loginsignup', 'Giriş Yap'); ?>
            </div>
        </div>
    </div>
    </div>
</div>
    <div class="col-lg-7 col-md-7 col-sm-7 "></div>

