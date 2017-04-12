<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse ">
        <ul class="nav nav-stacked" id="side-menu ">



            <li>
                <?php echo anchor('loginsignup/kullanicisign', '<i class="fa fa-table fa-fw"></i>Kullanıcı Kaydı'); ?>

            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw "></i>Kampanya Satışı<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'Onay Bekleyen Satışlar'); ?></li>
                    <li><?php echo anchor('', 'Onaylanan Satışlar'); ?> </li>
                    <li><?php echo anchor('', 'Onaylanmamış Satışlar'); ?></li>
                      
                  
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <?php echo anchor('', 'İhtiyaç Talebi Onaylama'); ?>
            </li>
            
            <li>
                <?php echo anchor('', 'Hesaplar'); ?>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'Bakiye Görüntüle'); ?></li>
                    <li><?php echo anchor('', 'Hesap Tanımla/Sil'); ?> </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->