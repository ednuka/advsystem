<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">İlan Kategorisi Ekle/Sil</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            
                
                <?php echo form_open('edit/ilan_kategori/sil'); ?> 
               <ul>
        <?php foreach ($listMenuLevel1 as $menu1) { ?>
            <li><input type="radio" name="ilan" value="<?php echo $menu1->id; ?>" /><?php echo $menu1->tanim; ?>
                <?php if (count($this->menumodel->listChildMenus($menu1->id)) > 0) { ?>
                    <ul>
                        <?php foreach ($this->menumodel->listChildMenus($menu1->id) as $menu2) { ?>
                            <li><input type="radio" name="ilan" value="<?php echo $menu2->id; ?>" /><?php echo $menu2->tanim; ?>
                            <?php if (count($this->menumodel->listChildMenus($menu2->id)) > 0) { ?>
                                <ul>
                                    <?php foreach ($this->menumodel->listChildMenus($menu2->id) as $menu3) { ?>
                                    <li>
                                        <input type="radio" name="ilan" value="<?php echo $menu3->id; ?>" />
                                        <?php echo $menu3->tanim; ?>
                                    </li>
                                    <?php }?>
                                </ul>
                                    <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
            </li>
            <?php } ?>
    </ul>
            <div class="row"><div class="col-lg-4"></div>
                <div class="col-lg-3">
                    <?php
                        $att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
                        echo form_submit('submit', 'Sil', $att);
                        ?>

                </div>
                <div class="col-lg-3"></div>
            </div>    
        
                <?php echo form_close(); ?>
            

        </div>
        <div class="col-lg-6">
            <?php
            $att = array('class' => 'form-horizontal');
            echo form_open('edit/ilan_kategori/ekle', $att);
            ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3"><label>Kategori Adı:</label></div>
                    <div class="col-lg-8"><input type="text" name="kategori" /></div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <?php
                        $att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
                        echo " " . form_submit('submit', 'Kaydet', $att);
                        ?>
                    </div>
                </div>
            </div>

            <?php
            //$att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
            //echo form_submit('submit', 'İleri', $att);
            //echo form_close();
            ?>
        </div>

    </div>
</div>
<!-- /#page-wrapper -->



