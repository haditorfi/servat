<?php
 	 $this->assign('title', 'لیست خواسته ها');
 	echo $this->Element('sidebar');
?>
<br/>
   <div class="row">
		<?php foreach ($demands as $demand): ?>
		<div class="col-xs-12 col-md-4 ">
			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php
			    $hasPic=0;
			     foreach($demand['AttachmentPicture'] as $attach):?>
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
			    	<h3><?php echo $this->Html->link($demand['Demand']['name'],array('controller'=>'demands','action'=>'view',$demand['Demand']['id'])); ?></h3>
			    </div>
			  </div>
			  <div class="panel-footer pan">
			  <div class="row">
			  	<div class="col-xs-12">
			  	<div> <?php echo $demand['Demand']['title']; ?></div>
			  	</div>
			  </div>
			  <hr/>
			  <div class="row">
			  	<div class="col-xs-12">
			  	<?php echo $this->Html->link('مشاهده جزئیات',array('controller'=>'Demands','action'=>'view',$demand['Demand']['id']),array('class'=>"btn btn-block btn-primary",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  	<div class="col-xs-6">
			  	<?php echo $this->Html->link(' تصاویر',array('controller'=>'Demands','action'=>'attach',$demand['Demand']['id']),array('class'=>"btn btn-block btn-success",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  	<div class="col-xs-6 pull-left">
			  	<?php echo $this->Html->link('ویرایش',array('controller'=>'Demands','action'=>'edit',$demand['Demand']['id']),array('class'=>"btn btn-block btn-warning",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  </div>
			  </div>
			</div>
		</div>
		<?php endforeach;?>
	</div>