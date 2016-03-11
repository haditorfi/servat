<?php
 	 $this->assign('title', 'لیست خواسته ها');
 	echo $this->Element('sidebar');
?>
<br/>
   <div class="col-xs-12">
   <div class="row">
		<?php foreach ($goalActions as $goalAction): ?>
		<div class="col-xs-12 ">
			<div class="panel panel-default">
			  <div class="panel-body">
			    <div class="text-center">
			    	<h4>هدف: <?php echo $this->Html->link($goalAction['Goal']['name'], array('controller' => 'goals', 'action' => 'view', $goalAction['Goal']['id'])); ?></h4>
			    </div>
			  </div>
			  <div class="panel-footer">
			  <div class="row">
			  	<div class="col-xs-12">
			  	<div>اقدام: <h3 style="color: red"><?php echo h($goalAction['GoalAction']['action']); ?></h3></div>
			  	</div>
			  </div>
			  <hr/>
			  <div class="row">
			  	<div class="col-xs-12 col-sm-4 col-md-3">
			  	<?php echo $this->Html->link('مشاهده هدف',array('controller' => 'goals', 'action' => 'view', $goalAction['Goal']['id']),array('class'=>"btn btn-block btn-primary",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  	<div class="col-xs-12 pull-left col-sm-3 col-md-2">
			  	<?php echo $this->Html->link('ویرایش اقدام',array('controller'=>'goal_actions','action'=>'edit',$goalAction['GoalAction']['id']),array('class'=>"btn btn-block btn-success",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  	<div class="col-xs-12 pull-left col-sm-3 col-md-2">
			  	<?php echo $this->Html->link('حذف اقدام',array('controller'=>'goal_actions','action'=>'delete',$goalAction['GoalAction']['id']),array('class'=>"btn btn-block btn-danger",'style'=>"margin-top:10px;"), __('آیا از حذف # %s # مطمئن هستید؟', $goalAction['GoalAction']['action'])); ?>
			  	</div>
			  	</div>
			  </div>
			  </div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>