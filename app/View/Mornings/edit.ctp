<?php
 	 $this->assign('title', 'ویرایش سوالات صبح');
   ?>
<?php echo $this->Form->create('Morning', array('role' => 'form')); ?>

<div class="mornings form">
	<h4 style="text-align: center;color: red"><?php echo __('ویرایش سوالات شب'); ?></h4>
	<div class="row">
		<div class="col-xs-12 well">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Node.id', array('class' => 'form-control', 'placeholder' => 'Node.id'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer1', array('class' => 'form-control','label'=>$ans1, 'placeholder' => 'به خاطر چه چیزی'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer2', array('class' => 'form-control','label'=>$ans2, 'placeholder' => 'به خاطر چه کسی'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer3', array('class' => 'form-control','label'=>$ans3, 'placeholder' => 'چه اتفاقی '));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('answer4', array('class' => 'form-control','label'=>$ans4, 'placeholder' => 'چه وظایفی'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('answer5', array('class' => 'form-control','label'=>$ans5, 'placeholder' => 'هدف اصلی امسال '));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('answer6', array('class' => 'form-control','label'=>$ans6, 'placeholder' => 'لطفا کارها را شماره گذاری نمایید.'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Node.created', array('class' => 'form-control','label'=>'تاریخ'));?>
				</div>
		</div><!-- end col md 12 -->
		<div class="form-group">
			<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-success pull-left', 'style'=>'margin:15px')); ?>
				
			<?php echo $this->Html->link(__('انصراف'),array('action'=>'lantern'), array('class' => 'btn btn-danger pull-left', 'style'=>'margin:15px')); ?>
		</div>	
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>


