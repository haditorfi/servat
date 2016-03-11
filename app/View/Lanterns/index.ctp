<?php
 	 $this->assign('title', 'مشاهده سوالات');
 	echo $this->Element('sidebar');
?>
<br/>
   <div class="col-xs-12">
   <div class="row">

		<?php foreach ($lanterns as $lantern): ?>
		<div class="col-xs-12 ">
			<div class="panel panel-info">
			  <div class="panel-heading" >
			    <div class="text-center">
			    	<h4><?php echo $lantern['Question']['id'].'- '. h($lantern['Question']['name']); ?></h4>
			    </div>
			  </div>
			  <div class="panel-footer">
			  <div class="row">
			  	<div class="col-xs-12">
			  	<h3 style="color: red"><?php echo h($lantern['Lantern']['answer']); ?></h3>
			  	</div>
			  </div>
			  <hr/>
			  <div class="row">
			  	<div style="float: left;">
			  	<?php echo $this->Html->link('ویرایش',array('action'=>'edit',$lantern['Lantern']['id']),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
			  	<?php echo $this->Form->postLink('حذف',array('action'=>'delete',$lantern['Lantern']['id']),array('class'=>"btn btn-danger",'style'=>"margin-top:10px;"), __('آیا از حذف # %s # مطمئن هستید؟', $lantern['Question']['name'])); ?>
			  	</div>
			  	</div>
			  </div>
			  </div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>