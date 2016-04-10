<?php
 	 $this->assign('title', 'لیست خواسته ها');
?>
<br/>
   <div class="col-xs-12">
   <div class="row">
		<div class="col-xs-12 ">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <div class="text-center">
			    	<h4 style="color: blue">هدف: <?php echo h($goalAction['Goal']['name']); ?></h4>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<div class="col-xs-12">
			  	<div>اقدام: <h3 style="color: red"><?php echo h($goalAction['GoalAction']['action']); ?></h3></div>
			  	</div>
			  </div>
			  <div class="panel-footer">
			  	<?php echo $this->Html->link('بازگشت به هدف',array('controller' => 'goals', 'action' => 'view', $goalAction['Goal']['id']),array('class'=>"btn btn-primary",'style'=>"margin-top:10px;")); ?>
			  	<div style="float: left;">
			  	<?php echo $this->Html->link('ویرایش اقدام',array('controller'=>'goal_actions','action'=>'edit',$goalAction['GoalAction']['id']),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
			  	<?php echo $this->Form->postLink('حذف اقدام',array('controller'=>'goal_actions','action'=>'delete',$goalAction['GoalAction']['id']),array('class'=>"btn btn-danger",'style'=>"margin-top:10px;"), __('آیا از حذف # %s # مطمئن هستید؟', $goalAction['GoalAction']['action'])); ?>
			  	</div>
			  </div>
			  </div>
			</div>
		</div>
	</div>
</div>