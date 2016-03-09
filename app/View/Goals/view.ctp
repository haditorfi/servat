<div class="goals view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Goal'); ?></h1>
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
			<?php echo h($goal['Goal']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($goal['User']['name'], array('controller' => 'users', 'action' => 'view', $goal['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Goal Type'); ?></th>
		<td>
			<?php echo $this->Html->link($goal['GoalType']['name'], array('controller' => 'goal_types', 'action' => 'view', $goal['GoalType']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($goal['Goal']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($goal['Goal']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($goal['Goal']['content']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thank'); ?></th>
		<td>
			<?php echo h($goal['Goal']['thank']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receive'); ?></th>
		<td>
			<?php echo h($goal['Goal']['receive']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($goal['Goal']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($goal['Goal']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($goal['Goal']['updated']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>