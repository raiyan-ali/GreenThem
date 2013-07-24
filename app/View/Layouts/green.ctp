<!--<!DOCTYPE html>-->
<?php echo $this->Html->docType('html5');?>

<html lang="en">
<?php echo $this->element('head');?>
<body id="home">
<div class="wrapper">
  <!-- header -->
  <?php echo $this->element('header');?>
  <!-- banner -->
   <?php echo $this->element('baner');?>
  <!-- Content -->
  <?php echo $this->element('section_first');?>
  <?php echo $this->element('section_second');?>
    <?php echo $this->element('section_third');?>
  <!-- footer -->
  <?php echo $this->element('footer');?>
</div>
<div class="switcher"></div>
<!-- lab -->
<!--<script type="text/javascript" src="js/jquery00.js"></script>-->
<!--<script src="js/modernizr.custom.17475.js"></script>-->
<?php echo $this->Html->script(array('jquery00', 'modernizr.custom.17475', 'focus','bootstrap','jquery.elastislide','slider','cockies','styleswi'));?>
<!-- clear input -->
<!--<script type="text/javascript" src="js/focus.js"></script>-->
<!-- bootstrap -->
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
<!-- Cerousel -->
<!--<script type="text/javascript" src="js/jquery.elastislide.js"></script>-->
<script type="text/javascript">
$( '#carousel' ).elastislide();
</script>
<!-- FlexiSlider -->
<!--<script type="text/javascript" src="js/slider.js"></script>-->
<!--<script src="js/cockies.js"></script>--> <!-- jQuery cookie --> 
<!--<script src="js/styleswi.js"></script>--> <!-- Style Switcher --> 
</body>
</html>
