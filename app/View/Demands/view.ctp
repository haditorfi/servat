<style>

</style>
<?php
 	 $this->assign('title', 'مشاهده خواسته');
 	echo $this->Element('sidebar');
   ?>
<div class="row">
	<div class="col-xs-12">
		<div class="btnha well"  style="margin-top: 10px">
			<div class="col-xs-3 ">
				<?php echo $this->Html->link('<span class="fa fa-list"></span>    لیست خواسته ها',array('action'=>'index',$demand['Demand']['id']),array('escape'=> false,'class' => 'btn btn-block btn-primary')); ?>
			</div>	
			<div class="col-xs-3">
				<?php echo $this->Html->link(__('<span class="fa fa-photo"></span>  مدیریت تصاویر'),array('action'=>'attach',$demand['Demand']['id']),array('escape'=> false,'class' => 'btn btn-block btn-success')); ?>
			</div>	
			<div class="col-xs-3">
				<?php echo $this->Html->link(__('<span class="fa fa-edit"></span>  ویرایش خواسته'),array('action'=>'edit',$demand['Demand']['id']),array('escape'=> false,'class' => 'btn btn-block btn-info')); ?>
			</div>		
			<div class="col-xs-3">
				<?php echo $this->Form->postLink('<span class="fa fa-trash"></span> حذف خواسته', array('action' => 'delete', $demand['Demand']['id']), array('escape' => false,'class' => 'btn btn-block btn-danger'), __('آیا از حذف خواسته # %s # مطمئن هستید?', $demand['Demand']['name']));?>
			</div>	
	<hr>
	</div>	
<div class="col-xs-12 col-md-8">	
	<h1 style="text-align: center;color: red;margin-top: 51px;">
		<?php echo $demand['Demand']['name'];?>
	</h1>
	<h4  style="text-align: center;color: blue; margin-top: 51px;">
		<?php echo $demand['Node']['title'];?>
	</h4>
</div>
<div class="col-xs-12 col-md-4">
	<div  class="imgf">
		<?php foreach($demand['AttachmentPicture'] as $attach):?>
			<?php if($attach['featured'] == true):?>
				<div>
					<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
		<?php endif;?>
		<?php endforeach;?>
	</div>
</div>
</div>
</div>
	<h4  style="color: #b94a48; margin-top: 51px;">شرح خواسته: </h4>
			<br/>
	<?php echo $demand['Demand']['content'];?>
		<h4  style="color: #b94a48; margin-top: 51px;">شکرگزاری: </h4>
			<br/>
	<?php echo $demand['Demand']['thank'];?>
<hr/>
<div class="row">
	<?php foreach($demand['AttachmentPicture'] as $attach):?>
		<?php if($attach['featured'] == false):?>
			<div class="col-xs-12 col-md-6">
				<div class="imgbox">
					<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
			</div>
		<?php endif;?>
	<?php endforeach;?>
</div>
