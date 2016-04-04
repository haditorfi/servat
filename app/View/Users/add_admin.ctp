<?php echo $this->Form->create('User', array('role' => 'form')); ?>


<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('افزودن کاربر'); ?></h1>
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
					<?php echo $this->Form->input('نام کاربری', array('class' => 'form-control', 'placeholder' => 'نام کاربری'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('رمز عبور', array('class' => 'form-control', 'placeholder' => 'رمز عبور'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('نام', array('class' => 'form-control', 'placeholder' => 'نام'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('نام خانوادگی', array('class' => 'form-control', 'placeholder' => 'نام خانوادگی'));?>
				</div>

				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => ' ایمیل'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('role_id', array('class' => 'form-control', 'placeholder' => 'نقش'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'وضعیت'));?>
				</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
			<?php echo $this->Form->end() ?>

