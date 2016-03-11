<?php
 	 $this->assign('title', 'مدیریت تصاویر اهداف');
 	echo $this->Element('sidebar');
   ?>
<?php echo $this->Form->create('Goal', array('role' => 'form','type'=>'file')); ?>


<div class="goals form">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			         <h3 style="text-align: center;color: red"><?php echo __('مدیریت تصاویر هدف '.$goal['Goal']['name']); ?></h3>
			</div>

    <?php echo $this->Flash->render() ?>
		</div>
	</div>
	<div class="row well">
		<div class="col-sm-12">
			<div class="col-sm-offset-3 col-sm-6 well">
				<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
			
				<h4> بارگذاری تصویر</h4>
			<div class="form-group">
				<?php echo $this->Form->input('picture.', array('class' => 'form-control','type'=>'file'));?>
			</div>
			<div  class="col-sm-3 ">
			<?php echo $this->Form->submit(__('ذخیره'), array('class' => 'btn btn-block btn-success')); ?>
			</div>
			<div class="col-sm-3 pull-left">
			<?php echo $this->Html->link(__('بازگشت'),array('action'=>"view/$id"), array('class' => 'btn btn-block btn-danger')); ?>
			</div>
			</div>
		</div>
	</div>
		<hr/>
	<div class="row">
		<?php foreach($goal['AttachmentPicture'] as $attach):?>
		<div class="col-sm-4 ">
			<div class="panel">
				<div class="panel-body">
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

