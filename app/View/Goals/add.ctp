<?php echo $this->Form->create('Goal', array('role' => 'form')); ?>


<div class="goals form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Goal'); ?></h1>
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
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('goal_type_id', array('class' => 'form-control', 'placeholder' => 'Goal Type Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('thank', array('class' => 'form-control', 'placeholder' => 'Thank'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('receive', array('class' => 'form-control', 'placeholder' => 'Receive'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

