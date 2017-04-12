<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
      <?php $base=$this->config->item('base_url');?>
    <link href="<?php echo $base.'assets/css/bootstrap.min.css'?>"href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base.'assets/css/bootstrap-theme.min.css'?>" rel="stylesheet">
	<link href="<?php echo $base.'assets/css/loginstyle.css'?>" rel="stylesheet">
            <link href="<?php echo $base.'assets/css/mystyle.css'?>" rel="stylesheet">
   
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>YTU İlan Yayınlama Servisi</title>
<script src="<?php echo $base.'assets/js/bootstrap.min.js'?>"></script>
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
 
<body class="login2background">

<div class="container">