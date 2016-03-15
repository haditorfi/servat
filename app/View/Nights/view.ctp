<div class="nights view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Night'); ?></h1>
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
			<?php echo h($night['Night']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Node'); ?></th>
		<td>
			<?php echo $this->Html->link($night['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $night['Node']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer1'); ?></th>
		<td>
			<?php echo h($night['Night']['answer1']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer2'); ?></th>
		<td>
			<?php echo h($night['Night']['answer2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer3'); ?></th>
		<td>
			<?php echo h($night['Night']['answer3']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer4'); ?></th>
		<td>
			<?php echo h($night['Night']['answer4']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer5'); ?></th>
		<td>
			<?php echo h($night['Night']['answer5']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer6'); ?></th>
		<td>
			<?php echo h($night['Night']['answer6']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Answer7'); ?></th>
		<td>
			<?php echo h($night['Night']['answer7']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>