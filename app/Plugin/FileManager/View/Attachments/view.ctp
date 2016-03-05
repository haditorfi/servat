<div class="attachments view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Attachment'); ?></h1>
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
			<?php echo h($attachment['Attachment']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Filename'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['filename']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Orginalname'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['orginalname']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Model'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['model']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Foreign Key'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['foreign_key']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Size'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['size']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mime'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['mime']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['featured']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($attachment['Attachment']['created']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>