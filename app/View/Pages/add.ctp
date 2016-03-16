<?php echo $this->Form->create('Page', array('role' => 'form')); ?>


<div class="pages form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Page'); ?></h1>
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
					<?php echo $this->Form->input('node_id', array('class' => 'form-control', 'placeholder' => 'Node Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'placeholder' => 'Parent Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lft', array('class' => 'form-control', 'placeholder' => 'Lft'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rght', array('class' => 'form-control', 'placeholder' => 'Rght'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('show_in_menu', array('class' => 'form-control', 'placeholder' => 'Show In Menu'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

