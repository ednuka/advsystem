<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $h1; ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <table>
                <tr>
                    <th></th>
                    <th>Kategoriler</th>

                </tr>
                <?php $link = 'edit/kategori_islemleri/sil/' . $tablo; ?>
                <?php echo form_open($link); ?> 
                <?php foreach ($kategoriler as $row) { ?>
                    <tr>
                        <td><input type="radio" name="<?php echo $tablo; ?>" value="<?php echo $row->id; ?>" /></td>
                    <td> <?php echo $row->tanim; ?> </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td>
                        <?php
                        $att = array('class' => 'btn btn-primary btn-lg btn-block login-button');
                        echo form_submit('submit', 'Sil', $att);
                        ?>
                    </td>
                </tr>

                <?php echo form_close(); ?>
            </table>

        </div>
        <div class="col-lg-6">
            <?php $link = 'edit/kategori_islemleri/ekle/' . $tablo; ?>
            <?php
            $att = array('class' => 'form-horizontal');

            echo form_open($link, $att);
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



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

