<?php
 	 $this->assign('title', 'افزدون تصویر');
 	echo $this->Element('sidebar');
   ?>
<style>
	.panel img{
		width:100%;
	}
</style>
<?php echo $this->Form->create('Demand', array('role' => 'form','type'=>'file')); ?>


<div class="demands form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Demand'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="well">
				<?php echo $this->Form->submit(__('ارسال'), array('class' => 'btn btn-block btn-default')); ?>
				<br/>
				<?php echo $this->Html->link(__('انصراف'),array('action'=>'index'), array('class' => 'btn btn-block btn-danger')); ?>
			
			</div>	
		</div><!-- end col md 3 -->
		<div class="col-md-9">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('picture.', array('class' => 'form-control','type'=>'file'));?>
				</div>
				<hr/>
	<div class="row imgbox">
		<?php foreach($demand['AttachmentPicture'] as $attach):?>
		<div class="col-sm-6 col-md-3">
			<div class="panel">
				<div class="panel-body imgbox">
					<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
				<div class="panel-footer">
					<?php echo $this->Html->link('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete_attachment', $attach['id']), array('escape' => false), __('این تصویر حذف شود # %s?', $attach['id'])); ?>
					<?php echo $this->Html->link('select', array('action' => 'featured', $attach['id']), array('escape' => false), __('قرار دادن به عنوان تصویر شاخص # %s?', $attach['id'])); ?>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
</div>
			<?php echo $this->Form->end() ?>

