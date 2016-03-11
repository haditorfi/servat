<?php
 	 $this->assign('title', 'افزدون هدف');
 	echo $this->Element('sidebar');
   ?>
<?php echo $this->Form->create('Goal', array('role' => 'form')); ?>


<div class="goals form">
	<div class="row">
		     <h4 style="text-align: center;color: red"><?php echo __('افزدون هدف'); ?></h4>
		<div class="col-md-12 well">

				<div class="form-group col-md-6">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'عنوان هدف','label'=>'عنوان'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('goal_type_id', array('class' => 'form-control', 'placeholder' => 'نوع هدف','label'=>'نوع هدف'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('زمان رسیدن', array('class' => 'form-control', 'placeholder' => 'زمان تقریبی رسیدن به هدف'));?>
				</div>
				<div class="form-group col-md-6">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'توضیح کوتاه','label'=>'توضیح'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'شرح هدف','label'=>'شرح'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('thank', array('class' => 'form-control', 'placeholder' => 'شکرگذاری','label'=>'شکرگذاری'));?>
				</div>
		</div><!-- end col md 12 -->

		<div class="form-group col-xs-12">
			<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-success pull-left', 'style'=>'margin-right:15px')); ?>
				
			<?php echo $this->Html->link(__('انصراف'),array('action'=>'index'), array('class' => 'btn btn-danger pull-left')); ?>
		</div>	
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

