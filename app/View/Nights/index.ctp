<?php
   $this->assign('title', 'آرشیو سوالات شب');
   ?> 
    <br/>
<h4 style="text-align: center;color: red"><?php echo __('آرشیو سوالات شب'); ?></h4>
 <br/>
      <div class="col-md-12">
 <div class="row">  
  <?php foreach ($nights as $night): 
                $date = new DateTime(h($night['Node']['created']));
                $time = $date->getTimestamp();
    ?> 
<div class="col-md-3"> 
  <div class="panel panel-info">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: blue"><?php echo __('شب: ').$this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"); ?></h4>
     </div>
     <div class="panel-body" style="color: blue;background-color: rgba(251, 238, 213, 0.15);">
     
      <?php echo $this->Html->link(__('مشاهده'),array('controller'=>'nights','action'=>'view',$night['Night']['id']), array('class' => 'btn btn-danger btn-block')); ?>
        
          </div>
     </div>   
  </div>
    <?php endforeach; ?>
   <?php if(count($nights) == 0):?>
  
          <div class="well text-center" style="color: blue">سوالات شب ثبت نشده ، جهت پاسخ "سوالات شب"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات شب',array('controller'=>'nights','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
<?php endif;?>
 </div><!-- end row -->
  </div>