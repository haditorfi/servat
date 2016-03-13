<?php
 	 $this->assign('title', 'افزدون هدف');
 	echo $this->Element('sidebar');
   ?>
<div class="mornings index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;New'.__(''), array('controller' => 'mornings', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
				<h1><?php echo __('Mornings'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer1'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer2'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer3'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer4'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer5'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('answer6'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($mornings as $morning): ?>
					<tr>
						<td nowrap><?php echo h($morning['Morning']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer1']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer2']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer3']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer4']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer5']); ?>&nbsp;</td>
						<td nowrap><?php echo h($morning['Morning']['answer6']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $morning['Morning']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $morning['Morning']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $morning['Morning']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $morning['Morning']['id'])); ?>
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