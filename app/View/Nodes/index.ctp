<div class="nodes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'nodes', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
				<h1><?php echo __('Nodes'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('title'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('type'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('url'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('status'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('visibility'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('created'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($nodes as $node): ?>
					<tr>
						<td nowrap><?php echo h($node['Node']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($node['User']['name'], array('controller' => 'users', 'action' => 'view', $node['User']['id'])); ?>
		</td>
						<td nowrap><?php echo h($node['Node']['title']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['type']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['url']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['status']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['visibility']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['created']); ?>&nbsp;</td>
						<td nowrap><?php echo h($node['Node']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $node['Node']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $node['Node']['id']), array('escape' => false)); ?>
	<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $node['Node']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?>
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