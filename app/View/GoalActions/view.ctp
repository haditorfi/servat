<?php
 	 $this->assign('title', 'لیست خواسته ها');
<div class="goalActions view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Goal Action'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="well">
				<?php echo $this->Html->link(__('Back To List'),array('action'=>'index'), array('class' => 'btn btn-block btn-danger')); ?>
			
			</div>
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($goalAction['GoalAction']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Goal'); ?></th>
		<td>
			<?php echo $this->Html->link($goalAction['Goal']['title'], array('controller' => 'goals', 'action' => 'view', $goalAction['Goal']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Action'); ?></th>
		<td>
			<?php echo h($goalAction['GoalAction']['action']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($goalAction['GoalAction']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($goalAction['GoalAction']['updated']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>