<?php echo $this->Form->create('Dashboard', array('role' => 'form')); ?>


<div class="dashboards form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Dashboard'); ?></h1>
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
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('node_id', array('class' => 'form-control', 'placeholder' => 'Node Id'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

