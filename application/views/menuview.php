<?php $base = $this->config->item('base_url'); ?>
<html>
    <head>
        <meta charset="utf-8"></meta>
    <title>BAŞlık</title>
    <link rel="stylesheet" href="<?php echo $base; ?>assets/jquery-ui.css" />
    <script src="<?php echo $base; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $base; ?>assets/js/jquery-ui.js"></script>

    <script type="text/javascript">
        $(function () {
            $("#menu").menu();
        });

    </script>
    <style type="text/css">
        .ui-menu{width:150px;}
    </style>
</head>
<body>
    <ul id="menu">
        <?php foreach ($listMenuLevel1 as $menu1) { ?>
            <li><?php echo $menu1->tanim; ?>
                <?php if (count($this->menumodel->listChildMenus($menu1->id)) > 0) { ?>
                    <ul>
                        <?php foreach ($this->menumodel->listChildMenus($menu1->id) as $menu2) { ?>
                            <li><?php echo $menu2->tanim; ?>
                            <?php if (count($this->menumodel->listChildMenus($menu2->id)) > 0) { ?>
                                <ul>
                                    <?php foreach ($this->menumodel->listChildMenus($menu2->id) as $menu3) { ?>
                                    <li><?php echo $menu3->tanim; ?></li>
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
    
    

</body>
</html>