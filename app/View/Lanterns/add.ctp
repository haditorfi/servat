<?php
 	 $this->assign('title', 'افزودن سوالات');
 	echo $this->Element('sidebar');
   ?>
<?php echo $this->Form->create('Lantern', array('role' => 'form')); ?>


<div class="lanterns form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Lantern'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="well">
									<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-block btn-default')); ?>
				<br/>
									<?php echo $this->Html->link(__('Cancle'),array('action'=>'index'), array('class' => 'btn btn-block btn-danger')); ?>
			
			</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
				<div class="form-group">
					<?php echo $this->Form->input('question_id', array('class' => 'form-control', 'placeholder' => 'Question Id'));?>
				</div>
				<div >
					<?php echo $this->Form->input('answer', array('class' => 'form-control', 'placeholder' => 'Answer'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('creaetd', array('label' => '', 'style' => 'display:none'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

