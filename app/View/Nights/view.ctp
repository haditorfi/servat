<?php
   $this->assign('title', 'مشاهده سوالات شب');
  echo $this->Element('sidebar');
   ?> 
 <br/>
      <div class="col-md-12">
 <div class="row">  
    <?php
                $date = new DateTime(h($night['Node']['created']));
                $time = $date->getTimestamp();
    ?> 
        </div> 
  <div class="panel panel-success">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __(' سوالات شب').'  '. $this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"); ?></h4>
     </div>
     <div class="panel-body" style="color: blue;background-color: rgba(251, 238, 213, 0.15);">
       <div><?php echo ($ans1); ?><br/><br/>
      <?php echo h($night['Night']['answer1']); ?>
      </div><hr/>
      <div ><?php echo ($ans2); ?><br/><br/>
      <?php echo h($night['Night']['answer2']); ?>
      </div><hr/>
      <div ><?php echo ($ans3); ?><br/><br/>
      <?php echo h($night['Night']['answer3']); ?>
      </div><hr/>
      <div ><?php echo ($ans4); ?><br/><br/>
      <?php echo h($night['Night']['answer4']); ?>
      </div><hr/>
      <div ><?php echo ($ans5); ?><br/><br/>
      <?php echo h($night['Night']['answer5']); ?>
      </div><hr/>
      <div><?php echo ($ans6); ?><br/><br/>
      <?php echo h($night['Night']['answer6']); ?>
      </div> <hr/>
      <div><?php echo ($ans7); ?><br/><br/>
      <?php echo h($night['Night']['answer7']); ?>
      </div> 
    <div class="form-group">
      <?php echo $this->Form->postLink(__('حذف'),array('action'=>'delete',$night['Night']['id']), array('class' => 'btn btn-danger pull-left', 'style'=>'margin:15px'), __('آیا از حذف سوالات شب در تاریخ ( %s ) مطمئن هستید؟', $this->jDateTime->date("d / m / Y", $time , true,true,"Asia/Tehran"))); ?>

      <?php echo $this->Html->link(__('ویرایش'),array('controller'=>'nights','action'=>'edit',$night['Night']['id']), array('class' => 'btn btn-warning pull-left', 'style'=>'margin:15px')); ?>
        
    </div>  
          </div>
     </div>   
  </div>
 </div><!-- end row -->