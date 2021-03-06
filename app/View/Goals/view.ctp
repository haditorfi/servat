<?php
 	 $this->assign('title', 'مشاهده هدف');
   ?>
<div class="row">
	<div class="col-xs-12">
		<div class="btnha well"  style="margin-top: 10px">
			<?php echo $this->Html->link('<span class="fa fa-list"></span>    لیست اهداف',array('action'=>'index',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-primary')); ?>
	
			<?php echo $this->Html->link(__('<span class="fa fa-edit"></span>  ویرایش هدف'),array('action'=>'edit',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-warning')); ?>
	
			<?php echo $this->Html->link(__('<span class="fa fa-photo"></span>  مدیریت تصاویر'),array('action'=>'attach',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-info')); ?>
	
			<?php echo $this->Form->postLink('<span class="fa fa-trash"></span> حذف هدف', array('action' => 'delete', $goal['Goal']['id'], $goal['Node']['id']), array('escape' => false,'class' => 'btn btn-danger'), __('آیا از حذف هدف # %s # مطمئن هستید?', $goal['Goal']['name']));?>
	
			<?php echo $this->Html->link(__('<span class="fa fa-plus"></span>  افزودن اقدام'),array('controller'=>'goal_actions','action'=>'add',$goal['Goal']['id']),array('escape'=> false,'class' => 'btn btn-success pull-left')); ?>
		</div>	
	</div>
</div>
<div class="row">
<div class="col-xs-12 col-md-8">
	<h1 style="text-align: center;color: red;margin-top: 51px;"><?php echo $goal['Goal']['name'];?></h1>
	<h4  style="text-align: center;color: blue; margin-top: 51px;"><?php echo $goal['Node']['title'];?></h4>
</div>	
<div class="col-xs-12 col-md-4">
	<div  class="imgf">
		<?php foreach($goal['AttachmentPicture'] as $attach):?>
			<?php if($attach['featured'] == true):?>
				<div>
				<?php echo $this->Attach->image($attach,'picture'); ?>
				</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
</div>
</div>
<div class="col-xs-12">
	<h4  style="color: #b94a48; margin-top: 51px;">شرح هدف: </h4>
		<br/>
			<?php echo $goal['Goal']['content'];?>
	<h4  style="color: #b94a48; margin-top: 51px;">شکرگزاری: </h4>
		<br/>
			<?php echo $goal['Goal']['thank'];?>
	<h4 style="color: #b94a48; margin-top: 51px;">اقدامات انجام شده: </h4>
</div>
<?php foreach ($goal['GoalAction'] as $goalAction): ?>
	<h4 style="color: blue">
		<?php echo $this->Html->link(__('<span class="fa fa-eye"></span>'), array('controller' => 'goal_actions', 'action' => 'view', $goalAction['id']), array('class'=>'btn btn-circle btn-default','data-toggle'=>'tooltip','title'=>'مشاهده اقدام!','escape' => false)); ?>

		<span>
			<?php echo $goalAction['action']; ?>
	</h4>		
<?php endforeach; ?>
<hr/>

<div class="row">
	<?php foreach($goal['AttachmentPicture'] as $attach):?>
		<?php if($attach['featured'] == false):?>
			<div class="imgbox col-xs-12 col-md-6">
				<?php echo $this->Attach->image($attach,'picture'); ?>
			</div>
		<?php endif;?>
	<?php endforeach;?>
</div>
<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>

