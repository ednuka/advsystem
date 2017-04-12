<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse ">
        <ul class="nav nav-stacked" id="side-menu ">



            <li>
                <?php echo anchor('loginsignup/kullanicisign', '<i class="fa fa-table fa-fw"></i>Kullanıcı Kaydı'); ?>

            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw "></i>Kampanyalar<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'Kampanyalarım'); ?>
                        <ul class="nav nav-third-level ">
                           <li>
                               <a href="#">Kullanıma Açık Kampanyalarım</a>
                           </li>
                            
                            <li>
                               <a href="#">Süresi Dolan Kampanyalarım</a>
                           </li>
                       </ul>
                    
                    </li>
                    <li><?php echo anchor('', 'Satıştaki Kampanyaları Görüntüle'); ?> </li>>
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
                <?php echo anchor('', 'İlan'); ?>
                <ul class="nav nav-second-level">
                    <li><?php echo anchor('', 'İlan Taslağı Oluştur/Yayınla'); ?></li>
                    <li><?php echo anchor('', 'İlanlarım'); ?>
                        <ul class="nav nav-third-level ">
                           <li><a href="#">Taslaklarım</a></li>
                            <li><a href="#">Yayındaki İlanlarım</a></li>
                             <li><a href="#">Geçmiş İlanlarım</a></li>
                              <li><a href="#">İncelemedeki İlanlarım</a></li>
                             <li><a href="#">Cezalı İlanlarım</a></li>
                       </ul>
                    </li>
                </ul>
            </li>

            <li>
                <?php echo anchor('', 'İhbar Edilen İlanlarım ve Reporları'); ?>
              
            </li>
            
            









        </ul>
    </div>
    <!-- /.sidebar-collapse -->