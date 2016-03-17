<?php
   $this->assign('title', 'لیست فانوس دریایی');
  echo $this->Element('sidebar');
   ?>
 <div class="row">
 <br/>
  <div class="col-md-6">
  <div class="panel panel-info">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __('فانوس دریایی ﺻﺒﺢ'); ?></h4>
     </div>
     <div class="panel-body" style="color: blue;background-color: rgba(251, 238, 213, 0.15);">
    <?php foreach ($mornings as $morning): ?>
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
      </div><hr/>
     <div class="form-group">
      <?php echo $this->Html->link(__('ویرایش'),array('controller'=>'mornings','action'=>'edit',$morning['Morning']['id']), array('class' => 'btn btn-warning pull-left', 'style'=>'margin:15px')); ?>
    </div>  
    <?php endforeach; ?>
   <?php if(count($mornings) == 0):?>
  
          <div class="text-center" style="color: blue">سوالات صبح ثبت نشده ، جهت پاسخ "سوالات صبح"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات صبح',array('controller'=>'mornings','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
<?php endif;?>
  </div>
  </div> 
 </div><!-- end row -->
  <div class="col-md-6">
  <div class="panel panel-success">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __('فانوس دریایی ﺷﺐ'); ?></h4>
     </div>
     <div class="panel-body" style="color: #b94a48;background-color: rgba(214, 233, 198, 0.12);">
    <?php foreach ($nights as $night): ?>
      <div><?php echo ($ansN1); ?><br/><br/>
      <?php echo h($night['Night']['answer1']); ?>
      </div><hr/>
      <div ><?php echo ($ansN2); ?><br/><br/>
      <?php echo h($night['Night']['answer2']); ?>
      </div><hr/>
      <div ><?php echo ($ansN3); ?><br/><br/>
      <?php echo h($night['Night']['answer3']); ?>
      </div><hr/>
      <div ><?php echo ($ansN4); ?><br/><br/>
      <?php echo h($night['Night']['answer4']); ?>
      </div><hr/>
      <div ><?php echo ($ansN5); ?><br/><br/>
      <?php echo h($night['Night']['answer5']); ?>
      </div><hr/>
      <div ><?php echo ($ansN6); ?><br/><br/>
      <?php echo h($night['Night']['answer6']); ?>
      </div><hr/>
      <div ><?php echo ($ansN7); ?><br/><br/>
      <div><?php echo h($night['Night']['answer7']); ?>
      </div>
     
    <?php endforeach; ?>
   <?php if(count($nights) == 0):?>
  
          <div class="text-center" style="color: blue">سوالات شب ثبت نشده ، جهت پاسخ "سوالات شب"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات شب',array('controller'=>'nights','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
<?php endif;?>
  </div>
  </div> 

 </div><!-- end row -->

</div><!-- end containing of content -->