<?php
   $this->assign('title', 'لیست سوالات صبح');
  echo $this->Element('sidebar');
   ?> 
 <br/>
      <div class="col-md-12">
 <div class="row">  
    <?php foreach ($mornings as $morning): 
                $date = new DateTime(h($morning['Node']['created']));
                $time = $date->getTimestamp();
    ?> 
        </div> 
  <div class="panel panel-info">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __(' سوالات صبح').'  '. $this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"); ?></h4>
     </div>
     <div class="panel-body" style="color: blue;background-color: rgba(251, 238, 213, 0.15);">
       <div><?php echo ($ans1); ?><br/><br/>
      <?php echo h($morning['Morning']['answer1']); ?>
      </div><hr/>
      <div ><?php echo ($ans2); ?><br/><br/>
      <?php echo h($morning['Morning']['answer2']); ?>
      </div><hr/>
      <div ><?php echo ($ans3); ?><br/><br/>
      <?php echo h($morning['Morning']['answer3']); ?>
      </div><hr/>
      <div ><?php echo ($ans4); ?><br/><br/>
      <?php echo h($morning['Morning']['answer4']); ?>
      </div><hr/>
      <div ><?php echo ($ans5); ?><br/><br/>
      <?php echo h($morning['Morning']['answer5']); ?>
      </div><hr/>
      <div><?php echo ($ans6); ?><br/><br/>
      <?php echo h($morning['Morning']['answer6']); ?>
      </div> 
    <div class="form-group">
      <?php echo $this->Form->postLink(__('حذف'),array('action'=>'delete',$morning['Morning']['id']), array('class' => 'btn btn-danger pull-left', 'style'=>'margin:15px'), __('آیا از حذف سوالات صبح در تاریخ ( %s ) مطمئن هستید?', $this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"))); ?>

      <?php echo $this->Html->link(__('ویرایش'),array('controller'=>'mornings','action'=>'edit',$morning['Morning']['id']), array('class' => 'btn btn-warning pull-left', 'style'=>'margin:15px')); ?>
        
    </div>  
          </div>
     </div>   
    <?php endforeach; ?>
   <?php if(count($mornings) == 0):?>
  
          <div class="well text-center" style="color: blue">سوالات صبح ثبت نشده ، جهت پاسخ "سوالات صبح"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات صبح',array('controller'=>'mornings','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
  </div>
 </div><!-- end row -->
<?php endif;?>