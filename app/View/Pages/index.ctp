<div class="pages index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'pages', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
				<h1><?php echo __('Pages'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('node_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('parent_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('lft'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('rght'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('content'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('show_in_menu'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pages as $page): ?>
					<tr>
						<td nowrap><?php echo h($page['Page']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($page['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $page['Node']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($page['ParentPage']['id'], array('controller' => 'pages', 'action' => 'view', $page['ParentPage']['id'])); ?>
		</td>
						<td nowrap><?php echo h($page['Page']['lft']); ?>&nbsp;</td>
						<td nowrap><?php echo h($page['Page']['rght']); ?>&nbsp;</td>
						<td nowrap><?php echo h($page['Page']['content']); ?>&nbsp;</td>
						<td nowrap><?php echo h($page['Page']['show_in_menu']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $page['Page']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $page['Page']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $page['Page']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('صفحه {:page} از {:pages}, تعدا {:current} رکورد ')));?></small>
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