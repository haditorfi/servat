<?php
 	 $this->assign('title', 'ویرایش اقدامات');
 	echo $this->Element('sidebar');
?>
<?php echo $this->Form->create('GoalAction', array('role' => 'form')); ?>

<div class="goalActions form">
	<div class="row">
		     <h4 style="text-align: center;color: red"><?php echo __('ویرایش اقدامات'); ?></h4>
		<div class="col-md-12 well">

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('action', array('class' => 'form-control', 'placeholder' => 'اقدام برای هدف','label'=>'اقدام'));?>
				</div>
		</div><!-- end col md 12 -->

		<div class="form-group col-xs-12">
			<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-success pull-left', 'style'=>'margin-right:15px')); ?>
				
			<?php echo $this->Html->link(__('انصراف'),array('controller'=>'goals','action'=>'index'), array('class' => 'btn btn-warning pull-left')); ?>

			<?php echo $this->Html->link(__('لیست اقدامات'),array('action'=>'index'), array('class' => 'btn btn-info ')); ?>
		</div>	
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

