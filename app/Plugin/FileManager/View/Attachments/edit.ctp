<?php echo $this->Form->create('Attachment', array('role' => 'form')); ?>


<div class="attachments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Attachment'); ?></h1>
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
					<?php echo $this->Form->input('filename', array('class' => 'form-control', 'placeholder' => 'Filename'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('orginalname', array('class' => 'form-control', 'placeholder' => 'Orginalname'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('model', array('class' => 'form-control', 'placeholder' => 'Model'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('foreign_key', array('class' => 'form-control', 'placeholder' => 'Foreign Key'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('type', array('class' => 'form-control', 'placeholder' => 'Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('size', array('class' => 'form-control', 'placeholder' => 'Size'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mime', array('class' => 'form-control', 'placeholder' => 'Mime'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured', array('class' => 'form-control', 'placeholder' => 'Featured'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

