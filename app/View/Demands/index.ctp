<?php
 	 $this->assign('title', 'لیست خواسته ها');
 	echo $this->Element('sidebar');
?>
<br/>
   <div class="row">
		<?php foreach ($demands as $demand): ?>
		<div class="col-sm-12 col-md-4">
			<div class="panel panel-default">
			  <div class="panel-body">
			    <?php echo $this->Html->image('demand.jpg');?>
			    <div class="text-center">
			    	<h3><?php echo $this->Html->link($demand['Demand']['name'],array('controller'=>'demands','action'=>'view',$demand['Demand']['id'])); ?></h3>
			    </div>
			  </div>
			  <div class="panel-footer">
			  <div class="row">
			  	<div class="col-md-12">
			  	<div> <?php echo $demand['Demand']['content']; ?></div>
			  	</div>
			  </div>
			  <hr/>
			  <div class="row">
			  	<div class="col-xs-12">
			  	<?php echo $this->Html->link('مشاهده جزئیات',array('controller'=>'Demands','action'=>'view',$demand['Demand']['id']),array('class'=>"btn btn-block btn-primary",'style'=>"margin-top:10px;")); ?>
			  	</div>
			  </div>
			  </div>
			</div>
		</div>
		<?php endforeach;?>
	</div>