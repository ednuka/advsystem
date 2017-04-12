<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse ">
        <ul class="nav nav-stacked" id="side-menu ">


            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw "></i>Kampanyalar<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('edit/bagis_show', 'Kampanya Tanımla'); ?></li>
                    <li><?php echo anchor('', 'Kampanyaları Görüntüle'); ?> </li>>
                    <!-- <li>
                       <a href="#">Third Level <span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level ">
                           <li>
                               <a href="#">Third Level Item</a>
                           </li>
                       </ul>
                   </li>-->
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <?php echo anchor('', 'İlanlar'); ?>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'Yayındaki İlanlar'); ?></li>
                    <li><?php echo anchor('', 'Yayından Kalkmış İlanlar'); ?></li>
                </ul>
            </li>

            <li>
                <?php echo anchor('', 'İhbar'); ?>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'İhbar Edilen İlanlar'); ?></li>
                    <li><?php echo anchor('', 'İncelemedeki İlanlar'); ?></li>
                    <li><?php echo anchor('', 'Cezalı İlanlar'); ?></li>
                    <li><?php echo anchor('', 'İhbar Kayıtları'); ?></li>
                </ul>
            </li>
            
            <li>
                <?php echo anchor('', 'Harcamalar'); ?>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'Hesap Bakiyeleri'); ?></li>
                    <li><?php echo anchor('', 'İhtiyaç Talebi'); ?></li>
                    <li><?php echo anchor('', 'İhtiyaç-Talep Kayıtları'); ?></li>
                </ul>
            </li>










        </ul>
    </div>
    <!-- /.sidebar-collapse -->