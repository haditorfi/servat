<?php
 	 $this->assign('title', 'افزدون هدف');
 	echo $this->Element('sidebar');
   ?>
<div class="mornings view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Morning'); ?></h1>
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
			<?php echo h($morning['Morning']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Node'); ?></th>
		<td>
			<?php echo $this->Html->link($morning['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $morning['Node']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer1'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer1']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer2'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer3'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer3']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer4'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer4']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer5'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer5']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer6'); ?></th>
		<td>
			<?php echo h($morning['Morning']['answer6']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>