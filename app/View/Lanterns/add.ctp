<?php
 	 $this->assign('title', 'سوالات صبح فانوس دریایی');
 	echo $this->Element('sidebar');
 	echo $this->Form->create('Lantern', array('role' => 'form')); 
   ?>
<div class="lanterns form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('سوالات صبح'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="well">
				<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-block btn-default')); ?>
				<br/>
				<?php echo $this->Html->link(__('انصراف'),array('action'=>'index'), array('class' => 'btn btn-block btn-danger')); ?>
			
			</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">

				<div class="form-group">
					<?php echo $this->Form->input('question_id', array('class' => 'form-control', 'placeholder' => ' سوال'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('answer', array('class' => 'form-control', 'placeholder' => 'پاسخ'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

