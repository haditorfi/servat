<?php
 	 $this->assign('title', 'لیست سوالات شب');
 	echo $this->Element('sidebar');
   ?>
<div class="nights index">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class='pull-left'><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;&nbsp;افزودن'.__(''), array('controller' => 'nights', 'action' => 'add'), array('escape' => false,'class'=>'btn btn-raised btn-primary')); ?> </div>
<h4 style="text-align: center;color: red"><?php echo __('لیست سوالات شب'); ?></h4>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
				<thead>
					<tr>
						<th nowrap><?php echo ($ans1); ?></th>
						<th nowrap><?php echo ($ans2); ?></th>
						<th nowrap><?php echo ($ans3); ?></th>
						<th nowrap><?php echo ($ans4); ?></th>
						<th nowrap><?php echo ($ans5); ?></th>
						<th nowrap><?php echo ($ans6); ?></th>
						<th nowrap><?php echo ($ans7); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($nights as $night): ?>
					<tr>
						<td nowrap><?php echo h($night['Night']['answer1']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer2']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer3']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer4']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer5']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer6']); ?>&nbsp;</td>
						<td nowrap><?php echo h($night['Night']['answer7']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-eye fa-2"></span>', array('action' => 'view', $night['Night']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-pencil-square-o fa-2"></span>', array('action' => 'edit', $night['Night']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-trash-o fa-2"></span>', array('action' => 'delete', $night['Night']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $night['Night']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('صفحه {:page} از {:pages}, تعداد {:current} رکورد ')));?></small>
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