<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
           <title>برنامه ثروتمندان</title>

	<?php

		echo $this->Html->css(array(
			'bootstrapHome.min',
			'bootstrap-rtl.min',
			'font-awesome.min',
			'freelancer',
			'style'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
</head>
<body>
	<?php 
		echo $this->fetch('content');

		echo $this->Html->script(array(
			'jquery.min',
			'bootstrap.min',
			'jquery.easing.min',
			'freelancer'
			));
?>
</body>
</html>
