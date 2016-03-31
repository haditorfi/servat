<?php
   $this->assign('title', 'آرشیو سوالات صبح');
   ?> 
    <br/>
<h4 style="text-align: center;color: red"><?php echo __('آرشیو سوالات صبح'); ?></h4>
 <br/>
<div class="col-md-12">
    <div class="row">  
    <?php foreach ($mornings as $morning): 
                $date = new DateTime(h($morning['Node']['created']));
                $time = $date->getTimestamp();
    ?> 
<div class="col-md-3"> 
  <div class="panel panel-info">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __('صبح: ').$this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"); ?></h4>
     </div>
     <div class="panel-body" style="color: blue;background-color: rgba(251, 238, 213, 0.15);"> 
     
      <?php echo $this->Html->link(__('مشاهده'),array('controller'=>'mornings','action'=>'view',$morning['Morning']['id']), array('class' => 'btn btn-success btn-block')); ?>
          </div>
     </div>   
  </div>
    <?php endforeach; ?>
   <?php if(count($mornings) == 0):?>
  
          <div class="well text-center" style="color: blue">سوالات صبح ثبت نشده ، جهت پاسخ "سوالات صبح"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات صبح',array('controller'=>'mornings','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
<?php endif;?>

  </div>
 </div><!-- end row -->
