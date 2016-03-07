<?php
 	 $this->assign('title', 'مدیریت تصاویر');
 	echo $this->Element('sidebar');
   ?>
<?php echo $this->Form->create('Demand', array('role' => 'form','type'=>'file')); ?>


<div class="demands form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('مدیریت تصاویر'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-block btn-default')); ?>
				<br/>
				<?php echo $this->Html->link(__('بازگشت'),array('action'=>"view/$id"), array('class' => 'btn btn-block btn-danger')); ?>
			
			</div>	
		</div><!-- end col md 4 -->
		<div class="col-md-8">
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('picture.', array('class' => 'form-control','type'=>'file'));?>
				</div>
				<hr/>
	<div class="row imgbox">
		<?php foreach($demand['AttachmentPicture'] as $attach):?>
		<div class="col-sm-6 ">
			<div class="panel">
				<div class="panel-body imgbox">
					<?php echo $this->Attach->image($attach,'picture'); ?>
		</div>
				<div class="panel-footer well">
					<?php echo $this->Html->link('<span class="fa fa-trash-o fa-2"></span> حذف', array('action' => 'delete_attachment', $attach['id']), array('style'=>'color:red','escape' => false), __('این تصویر حذف شود # %s?', $attach['id'])); ?>
					<?php echo $this->Html->link('<span class="fa fa-heart fa-2">&nbsp;&nbsp</span>شاخص شود', array('action' => 'featured', $attach['id']), array('style'=>'color:blue','class'=>'pull-left','escape' => false), __('قرار دادن به عنوان تصویر شاخص # %s?', $attach['id'])); ?>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
</div>
			<?php echo $this->Form->end() ?>

