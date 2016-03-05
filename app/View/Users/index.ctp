<?php
 	 $this->assign('title', 'لیست کاربران');
 	echo $this->Element('sidebar');
   ?>
<div class="users index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'users', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
				<h1><?php echo __('Users'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('username'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('name'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('family'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('role_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
		<td nowrap><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td nowrap><?php echo h($user['User']['name']); ?>&nbsp;</td>
						<td nowrap><?php echo h($user['User']['family']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
						
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $user['User']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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