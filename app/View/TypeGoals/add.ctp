<?php echo $this->Form->create('TypeGoal', array('role' => 'form')); ?>


<div class="typeGoals form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Type Goal'); ?></h1>
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
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

