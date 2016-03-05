<div class="demandActions view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Demand Action'); ?></h1>
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
			<?php echo h($demandAction['DemandAction']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Demand'); ?></th>
		<td>
			<?php echo $this->Html->link($demandAction['Demand']['name'], array('controller' => 'demands', 'action' => 'view', $demandAction['Demand']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Action'); ?></th>
		<td>
			<?php echo h($demandAction['DemandAction']['action']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($demandAction['DemandAction']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($demandAction['DemandAction']['updated']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>