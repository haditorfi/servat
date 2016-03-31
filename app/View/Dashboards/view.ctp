<div class="dashboards view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Dashboard'); ?></h1>
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
			<?php echo h($dashboard['Dashboard']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Node Id'); ?></th>
		<td>
			<?php echo h($dashboard['Dashboard']['node_id']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>