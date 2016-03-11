<?php
 	 $this->assign('title', 'مشاهده سوالات');
 	echo $this->Element('sidebar');
   ?>
<div class="lanterns view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Lantern'); ?></h1>
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
			<?php echo h($lantern['Lantern']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($lantern['User']['name'], array('controller' => 'users', 'action' => 'view', $lantern['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Question'); ?></th>
		<td>
			<?php echo $this->Html->link($lantern['Question']['name'], array('controller' => 'questions', 'action' => 'view', $lantern['Question']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer'); ?></th>
		<td>
			<?php echo h($lantern['Lantern']['answer']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Creaetd'); ?></th>
		<td>
			<?php echo h($lantern['Lantern']['creaetd']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($lantern['Lantern']['updated']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>