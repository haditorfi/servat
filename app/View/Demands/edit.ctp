<?php 
	$this->assign('title', 'یرایش خواسته');
	echo $this->Form->create('Demand', array('role' => 'form')); 
?>
<div class="demands form">
	<h4 style="text-align: center;color: red">
		<?php echo __('ویرایش '.$demand['Demand']['name']); ?>
	</h4>
	<div class="col-md-12 well">
		<div class="form-group">
			<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('Node.id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('Node.id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
		</div>
		<div class="form-group col-md-6">
			<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'عنوان خواسته','label'=>'عنوان'));?>
		</div>
		<div class="form-group col-md-6">
			<?php echo $this->Form->input('Node.title', array('class' => 'form-control', 'placeholder' => 'توضیح کوتاه','label'=>'توضیح'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'شرح خواسته','label'=>'شرح'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('thank', array('class' => 'form-control', 'placeholder' => 'شکرگذاری','label'=>'شکرگذاری'));?>
		</div>
		<div class="form-group" style="margin: 20px">
			<?php echo $this->Form->input('Node.status', array('class' => 'form-control  col-md-1','label'=>'نمایش در داشبورد'));?>
		</div>
	</div><!-- end col md 12 -->

	<div class="form-group col-xs-12" style="margin-bottom: 100px">
		<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-success pull-left', 'style'=>'margin-right:15px')); ?>
				
		<?php echo $this->Html->link(__('انصراف'),array('action'=>'view/'.$id), array('class' => 'btn btn-danger pull-left')); ?>
	</div>
</div><!-- end row -->
<?php echo $this->Form->end() ?>

