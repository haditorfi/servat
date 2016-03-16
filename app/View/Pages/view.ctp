<div class="pages view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Page'); ?></h1>
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
			<?php echo h($page['Page']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Node'); ?></th>
		<td>
			<?php echo $this->Html->link($page['Node']['title'], array('controller' => 'nodes', 'action' => 'view', $page['Node']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Parent Page'); ?></th>
		<td>
			<?php echo $this->Html->link($page['ParentPage']['id'], array('controller' => 'pages', 'action' => 'view', $page['ParentPage']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lft'); ?></th>
		<td>
			<?php echo h($page['Page']['lft']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rght'); ?></th>
		<td>
			<?php echo h($page['Page']['rght']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($page['Page']['content']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Show In Menu'); ?></th>
		<td>
			<?php echo h($page['Page']['show_in_menu']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>