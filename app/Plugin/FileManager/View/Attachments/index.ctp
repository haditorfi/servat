<div class="attachments index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'attachments', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-primary')); ?> </div>
				<h1><?php echo __('Attachments'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('filename'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('orginalname'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('model'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('foreign_key'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('type'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('size'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('mime'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('featured'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($attachments as $attachment): ?>
					<tr>
						<td nowrap><?php echo h($attachment['Attachment']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['filename']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['orginalname']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['model']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['foreign_key']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['type']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['size']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['mime']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['featured']); ?>&nbsp;</td>
						<td nowrap><?php echo h($attachment['Attachment']['created']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $attachment['Attachment']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $attachment['Attachment']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $attachment['Attachment']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $attachment['Attachment']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->