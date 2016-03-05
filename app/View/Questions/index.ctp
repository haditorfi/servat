<div class="questions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'questions', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
				<h1><?php echo __('Questions'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('name'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('time'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($questions as $question): ?>
					<tr>
						<td nowrap><?php echo h($question['Question']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($question['Question']['name']); ?>&nbsp;</td>
						<td nowrap><?php echo h($question['Question']['time']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $question['Question']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $question['Question']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $question['Question']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records ')));?></small>
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