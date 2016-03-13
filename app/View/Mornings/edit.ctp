<?php
 	 $this->assign('title', 'ویرایش سوالات صبح');
 	echo $this->Element('sidebar');
   ?>
<?php echo $this->Form->create('Morning', array('role' => 'form')); ?>

<?php 
$ans1 = '1- به خاطر چه چیری همین الان سپاسگزارم؟' ;
$ans2 = '2- به خاطر چه کسی سپاسگزارم؟' ;
$ans3 = '3- امروز دوست دارم چه اتفاقی را تجربه کنم؟' ;
$ans4 = '4- دوست دارم خدا به چه وظایفی در مورد من عمل کند؟' ;
$ans5 = '5- هدف اصلی امسالم چیست، کاری برای نزدیکتر شدن به آن انجام می دهم؟' ;
$ans6 = '6- اگر امروز فقط بتوانم 3 کار انجام بدهم آن 3 کار چه خواهند بود؟' ;
?>

<div class="mornings form">
	<div class="row">
		<div class="col-xs-12 well">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer1', array('class' => 'form-control','label'=>$ans1, 'placeholder' => 'سوال 1'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer2', array('class' => 'form-control','label'=>$ans2, 'placeholder' => 'سوال 2'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer3', array('class' => 'form-control','label'=>$ans3, 'placeholder' => 'سوال 3'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer4', array('class' => 'form-control','label'=>$ans4, 'placeholder' => 'سوال 4'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('answer5', array('class' => 'form-control','label'=>$ans5, 'placeholder' => 'سوال 5'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('answer6', array('class' => 'form-control','label'=>$ans6, 'placeholder' => 'سوال 6'));?>
				</div>
		</div><!-- end col md 12 -->
		<div class="form-group">
			<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-success pull-left', 'style'=>'margin:15px')); ?>
				
			<?php echo $this->Html->link(__('انصراف'),array('action'=>'index'), array('class' => 'btn btn-danger pull-left', 'style'=>'margin:15px')); ?>
		</div>	
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>



