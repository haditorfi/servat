<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php

		echo $this->Html->css(array(
			'bootstrap.min',
			'bootstrap-rtl.min',
			'font-awesome.min',
			'metisMenu',
			'jspc-peach',
			'freelancer',
			'sb-admin',
			'style'
			));
		echo $this->Html->script(array(
			'jquery.min',
			'bootstrap.min',
			'metisMenu',
			'js-persian-cal.min',
			'jquery.easing.min',
			'freelancer',
			'sb-admin'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		</div>
</body>
</html>
