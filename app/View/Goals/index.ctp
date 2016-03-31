<?php
 	 $this->assign('title', 'لیست اهداف');
   ?>
   <br/>
<h4 style="text-align: center;color: red"><?php echo __('لیست اهداف'); ?></h4>
   <div class="row">
   <div class="col-xs-12">
		<?php foreach ($goals as $goal): ?>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php
			    $hasPic=0;
			     foreach($goal['AttachmentPicture'] as $attach):?>
			<?php if($attach['featured'] == true):?>
				<div class="indexImg">
				<?php echo $this->Attach->image($attach,'picture');
				$hasPic++;
				 ?>
				</div>
			<?php endif;?>
		<?php endforeach;?>
			  <?php
			  if ($hasPic<1) {
			   echo $this->html->image('demand.jpg'); 
			   };
			   ?>
			    <div class="text-center">
			    	<h3><?php echo $this->Html->link($goal['Goal']['name'],array('controller'=>'goals','action'=>'view',$goal['Goal']['id'])); ?></h3>
			    </div>
			  </div>
			  <div class="panel-footer pan">
			  <div class="row">
			  	<div class="col-xs-12">
			  	<div> <?php echo $goal['Node']['title']; ?></div>
			  	</div>
			  </div>
			  <hr/>
			  <div class="row">
			  	<div class="col-xs-12">
			  	<?php echo $this->Html->link('مشاهده هدف',array('controller'=>'goals','action'=>'view',$goal['Goal']['id']),array('class'=>"btn btn-block btn-primary",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  	</div>
			  	<div class="col-xs-12">
			  	<?php echo $this->Html->link('اقدام برای هدف',array('controller'=>'goal_actions','action'=>'add',$goal['Goal']['id']),array('class'=>"btn btn-block btn-success",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  </div>
			  </div>
			</div>
		<?php endforeach;?>
<?php if(count($goals) == 0):?>
	
			  	<div class="well text-center" style="color: blue">در حال حاظر هدفی ایجاد نشده ، جهت ایجاد "افزودن هدف"  را بفشارید.<br/><br/><br/>
			  	<?php echo $this->Html->link('افزودن هدف',array('action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
			  	</div>
<?php endif;?>
		</div>
	</div>
</div>