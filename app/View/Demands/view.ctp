<style>
.well > img{
	width:100%;
}
.imgf{
	width:200px;
	float:left;
}
</style>
<?php
 	 $this->assign('title', 'مشاهده خواسته');
 	echo $this->Element('sidebar');
   ?>
<div class=" page-header row">
	<div class="col-sm-12">
	<div class="well"  style="margin-top: 10px">
	<div class="col-xs-3 ">
		<?php echo $this->Html->link(__('لیست خواسته ها'),array('action'=>'index',$demand['Demand']['id']),array('class' => 'btn btn-block btn-primary')); ?>
	</div>	
	<div class="col-xs-3">
		<?php echo $this->Html->link(__('مدیریت تصاویر'),array('action'=>'attach',$demand['Demand']['id']),array('class' => 'btn btn-block btn-success')); ?>
	</div>	
	<div class="col-xs-3">
		<?php echo $this->Html->link(__('ویرایش خواسته'),array('action'=>'edit',$demand['Demand']['id']),array('class' => 'btn btn-block btn-info')); ?>
	</div>		
	<div class="col-xs-3">
		<?php echo $this->Html->link(' حذف خواسته', array('action' => 'delete', $demand['Demand']['id']), array('escape' => false,'class' => 'btn btn-block btn-danger'), __('آیا از حذف خواسته # %s # مطمئن هستید?', $demand['Demand']['name']));?>
	</div>	
	<hr>
	</div>	
	<div class="imgf">
		<?php foreach($demand['AttachmentPicture'] as $attach):?>
			<?php if($attach['featured'] == true):?>
				<div class="well imgbox">
				<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
	<h1 style="text-align: center;color: red">خواسته : <?php echo $demand['Demand']['name'];?></h1>
	</div>
</div><h4  style="color: blue; margin-top: 51px;">شرح خواسته: </h4><br/>
<?php echo $demand['Demand']['content'];?>
<h4  style="color: blue; margin-top: 51px;">شکرگزاری: </h4><br/>
<?php echo $demand['Demand']['thank'];?>
<hr/>
<div class="row">
<?php foreach($demand['AttachmentPicture'] as $attach):?>
	<?php if($attach['featured'] == false):?>
<div class="col-sm-12 col-md-6">
	<div class="well imgbox">
		<?php echo $this->Attach->image($attach,'picture'); ?>
	</div>
</div>
	<?php endif;?>
<?php endforeach;?>
</div>
