<head>
<title>
<?php echo Configure::read('sitetitle'); ?>
</title>
<!--<meta name="description" content="Place your description here">-->
<?php
echo $this->Html->meta(
    'description',
    'Place your description here'
);
?>
<!--<meta charset="utf-8">-->
<?php echo $this->Html->meta(array('charset' => 'utf-8'));?>
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
<?php echo $this->Html->meta('viewport',"'width=device-width', 'initial-scale=1','maximum-scale=1'");?>
<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all">-->
<?php echo $this->Html->css('style');?>

<!-- Slider -->
<!--<link rel="stylesheet" href="css/flexslid.css" type="text/css" media="screen">-->
<?php echo $this->Html->css('flexslid');?>
<!-- bootstrap css -->
<!--<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">-->
<?php echo $this->Html->css('bootstrap');?>
<!-- cerousel css -->
<!--<link rel="stylesheet" type="text/css" href="css/elastislide.css" />-->
<?php echo $this->Html->css('elastislide');?>
<!-- Style Switcher Box -->
<!--<link rel="stylesheet" href="css/switcher.css">-->
<?php echo $this->Html->css('switcher');?>
<!-- skins -->
<!--<link rel="stylesheet" name="skins" href="css/default.css" type="text/css" media="all">-->
<?php echo $this->Html->css('default');?>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<!-- jquery -->

</head>