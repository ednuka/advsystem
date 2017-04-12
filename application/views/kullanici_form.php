<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Yeni Kullanıcı Kayıt Ekranı</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">

        <div class="col-lg-5">

            <?php
            $att = array('class' => 'form-horizontal');
            echo form_open('loginsignup/uye_ileri', $att);
            ?>
            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Ad Soyad</label>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="isim" id="name"  placeholder="İsim"/>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="soyisim" id="name"  placeholder="Soyisim"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Şifre</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="parola1" 
                               id="password"  placeholder="Şifrenizi Giriniz"
                               title="Parolanız en az 6 karakter, büyük harf, küçük harf ve numara içermelidir!"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  onchange="form.parola2.pattern = this.value;"
                               minlength="6" maxlength="20" required/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Şifre Onayla</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="parola2" id="confirm"  
                               placeholder="Parolanızı Onaylayın" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                               minlength="6" maxlength="20" title="Lütfen üstte belirlediğiniz 
                               parolanın aynısını giriniz!"  required/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Uye Tipini Seçiniz</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <select name="uyetip">


                                <option value="1">Üst Yönetici</option>
                                 <option value="2">Yönetici</option>
                                  <option value="3">Finansal Birim</option>


                          
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <div class="row">
                    <div class="col-lg-9"></div>
                    <div class="col-lg-3">
                        <?php
                        $att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
                        echo form_submit('submit', 'Kaydet', $att);
                        echo form_close();
                        ?>
                    </div>
                </div>

            </div>






        </div><!--col-lg-6 sonu-->
        <div class="col-lg-7"></div>

    </div>

</div>
<!-- /#page-wrapper -->



