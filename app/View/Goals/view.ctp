<?php
 	 $this->assign('title', 'مشاهده هدف');
 	echo $this->Element('sidebar');
   ?>
<div class="row">
	<div class="col-sm-12">
	<div class="btnha well"  style="margin-top: 10px">
	<div class="col-xs-3 ">
		<?php echo $this->Html->link('<span class="fa fa-list"></span>    لیست اهداف',array('action'=>'index',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-block btn-primary')); ?>
	</div>	
	<div class="col-xs-2">
		<?php echo $this->Html->link(__('<span class="fa fa-edit"></span>  ویرایش هدف'),array('action'=>'edit',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-block btn-warning')); ?>
	</div>	
	<div class="col-xs-2">
		<?php echo $this->Html->link(__('<span class="fa fa-photo"></span>  مدیریت تصاویر'),array('action'=>'attach',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-block btn-info')); ?>
	</div>		
	<div class="col-xs-2">
		<?php echo $this->Form->postLink('<span class="fa fa-trash"></span> حذف هدف', array('action' => 'delete', $goal['Goal']['id']), array('escape' => false,'class' => 'btn btn-block btn-danger'), __('آیا از حذف هدف # %s # مطمئن هستید?', $goal['Goal']['name']));?>
	</div>	
	<div class="col-xs-3">
		<?php echo $this->Html->link(__('<span class="fa fa-plus"></span>  افزودن اقدام'),array('controller'=>'goal_actions','action'=>'add',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-block btn-success')); ?>
	</div>	
	<hr>
	</div>	
	<div  class="imgf">
		<?php foreach($goal['AttachmentPicture'] as $attach):?>
			<?php if($attach['featured'] == true):?>
				<div>
				<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>

		<h1 style="text-align: center;color: red;margin-top: 51px;"><?php echo $goal['Goal']['name'];?></h1>
		<h4  style="text-align: center;color: blue; margin-top: 51px;"><?php echo $goal['Goal']['title'];?></h4>
	</div>
</div>
	<h4  style="color: #b94a48; margin-top: 51px;">شرح هدف: </h4>
<br/>
	<?php echo $goal['Goal']['content'];?>
		<h4  style="color: #b94a48; margin-top: 51px;">شکرگزاری: </h4><br/>
	<?php echo $goal['Goal']['thank'];?>
	<h4 style="color: #b94a48; margin-top: 51px;">کارهای که باید انجام داد:</h4><br/>
	<?php foreach ($goal['GoalAction'] as $goalAction): ?>
			<div>
			<h4>
			<?php echo $this->Html->link(__('<span class="fa fa-edit"></span>'), array('controller' => 'goal_actions', 'action' => 'edit', $goalAction['id']), array('data-toggle'=>'tooltip','title'=>'ویرایش اقدام!','escape' => false)); ?>

			
			<span>
				<?php echo $goalAction['action']; ?>
			</h4>
			</div>
			<br/>
	<?php endforeach; ?>
<hr/>
<div class="row">
	<?php foreach($goal['AttachmentPicture'] as $attach):?>
		<?php if($attach['featured'] == false):?>
	<div class="col-xs-12 col-md-6 col-sm-4">
		<div class="imgbox">
			<?php echo $this->Attach->image($attach,'picture'); ?>
		</div>
	</div>
		<?php endif;?>
	<?php endforeach;?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</div>
