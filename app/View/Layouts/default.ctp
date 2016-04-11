<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			'sb-admin',
			'style'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
</head>
<body>
    <div id="wrapper">
		<?php
			echo $this->Element('sidebar');
		   ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
			<?php echo $this->fetch('content'); ?>
	</div>
	</div>
	</div>
<?php

		echo $this->Html->script(array(
			'jquery.min',
			'bootstrap.min',
			'metisMenu',
			'js-persian-cal.min',
			'jquery.easing.min',
			'sb-admin-2'
			));
?>
</body>
</html>
