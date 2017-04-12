   <?php $base=$this->config->item('base_url');?>
        <?php echo form_open('loginsignup/uye_gecerlimi'); ?><!--form başlangıcı-->
            <div class="col-lg-5 col-md-5 col-sm-5  loginbox">
                <div class=" row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="<?php echo $base.'assets/img/logoytu.gif'?>" alt="Logo" class="logo"> 
                </div>
                
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  " >
                <div class='row'>
                </br>
                <span class="logotext" >İlan Yayınlama Servisi</span>
                </div>       
                </div>
            </div>
            
            <div class='row'>
                <span class="singtext" >Oturuma Giriş</span>
            </div>
                
                <div class=" row loginbox_content ">                        
                    <div class="input-group input-group-sm" >
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <?php 
                            $data = array(
                                         'name'=>'email',
                                         'type'  => 'text',
                                         'placeholder'=>'e-posta',
                                         'class' => 'form-control'
                                        );
                            echo form_input($data);
                        ?>
                    </div>
                    <br>
                    
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </span>
                        <?php 
                            $data = array(
                                        'name'=>'parola',
                                        'type'  => 'password',
                                        'placeholder'=>'parola',
                                        'class' => 'form-control'
                                        );
                            echo form_input($data);
                        ?>
                    </div>              
                </div>
                 
                <div class="row ">                   
                    <div class="col-lg-8 col-md-8  col-sm-8 col-xs-7 forgotpassword "> 
                        <?php echo anchor('#', 'Parolamı unuttum!');?>                       
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4  col-xs-5 ">                        
                        <span class="glyphicon glyphicon-log-in">
                            <?php echo form_submit('submit','Giriş');  ?>
                        </span>
                    </div>
                </div>
                </br>
                
                <div class='row'>
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 signup "> 
                        Hesabınız yok mu? <?php echo anchor('loginsignup/signup', 'Kayıt Ol');?> 
                    </div>
                </div>
            </div>
        <?php echo form_close(); ?> <!--form bitiş-->
        <div class="col-lg-7 col-md-7 col-sm-7 "></div>
