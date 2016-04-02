 <?php
   $this->assign('title', 'داشبورد برنامه ثروتمندان');
   ?>
   <br/>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge"><?php echo (count($demands))?></div>
                                    <div>تعداد خواسته ها</div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="panel-footer">
                            <?php
                             echo $this->Html->link(__('<span class="pull-right">مشاهده خواسته ها </span><span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>'),array('controller'=>'demands','action'=>'index'),array('escape'=> false,'class'=>'clearfix', 'style'=>'color: #428bca'));
                            ?> 
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge"><?php echo (count($goals))?></div>
                                    <div>تعداد اهداف</div>
                                </div>
                            </div>
                        </div> 
                         <div class="panel-footer">
                            <?php
                             echo $this->Html->link(__('<span class="pull-right">مشاهده اهداف </span><span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>'),array('controller'=>'goals','action'=>'index'),array('escape'=> false,'class'=>'clearfix'));
                            ?> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sun-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge"><?php echo (count($mornings))?></div>
                                    <div>تعداد سوالات صبح</div>
                                </div>
                            </div>
                        </div>
                    <div class="panel-footer">
                            <?php
                             echo $this->Html->link(__('<span class="pull-right">مشاهده سوالات صبح </span><span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>'),array('controller'=>'mornings','action'=>'index'),array('escape'=> false,'class'=>'clearfix'));
                            ?> 
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-moon-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="huge"><?php echo (count($nights))?></div>
                                    <div>تعداد سوالات شب</div>
                                </div>
                            </div>
                        </div>
                    <div class="panel-footer">
                            <?php
                             echo $this->Html->link(__('<span class="pull-right">مشاهده سوالات شب </span><span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>'),array('controller'=>'nights','action'=>'index'),array('escape'=> false,'class'=>'clearfix'));
                            ?> 
                    </div>
                    </div>
                </div>  

 <?php if(count($dashMornings) == 0):?>
  <div class="col-md-6">
  <div class="panel panel-info">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __('فانوس دریایی ﺻﺒﺢ'); ?></h4>
     </div>
     <div class="panel-body" style="color: #b94a48;background-color: rgba(251, 238, 213, 0.15);">
  
          <div class="text-center" style="color: blue">سوالات صبح ثبت نشده ، جهت پاسخ "سوالات صبح"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات صبح',array('controller'=>'mornings','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
 </div> </div> 
 </div> 
<?php endif;?>
   <?php if(count($dashNights) == 0):?>
  <div class="col-md-6">
  <div class="panel panel-success">
     <div class="panel-heading">
       <h4 class="panel-title" style="text-align: center;color: red"><?php echo __('فانوس دریایی ﺷﺐ'); ?></h4>
     </div>
     <div class="panel-body" style="color: #b94a48;background-color: rgba(214, 233, 198, 0.12);">
  
          <div class="text-center" style="color: blue">سوالات شب ثبت نشده ، جهت پاسخ "سوالات شب"  را بفشارید.<br/><br/><br/>
          <?php echo $this->Html->link('سوالات شب',array('controller'=>'nights','action'=>'add'),array('class'=>"btn btn-success",'style'=>"margin-top:10px;")); ?>
          </div>
 </div>
  </div> 
 </div>
<?php endif;?>
<?php if(count($statusDemands) != 0):?>
            </div>
             <div class="row">
              <div class="col-md-12">
 <h4 class="page-header">خواسته های شاخص</h4>
        <?php foreach ($statusDemands as $demand): ?>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-primary">
              <div class="panel-body" style="background-color: #3F51B5">
              
                <div class="text-center">
                    <h3 style="color: white"><?php echo h($demand['Demand']['name']); ?></h3>
                </div>
              </div>
              <div class="panel-footer">
              <div class="row">
                <div class="col-xs-12">
                <div> <?php echo $demand['Node']['title']; ?></div>
                </div>
              </div>
              <hr/>
              <div class="row">
                <div class="col-xs-12">
                <?php echo $this->Html->link('مشاهده خواسته',array('controller'=>'Demands','action'=>'view',$demand['Demand']['id']),array('class'=>"btn btn-block btn-primary")); ?>
                </div>
               
              </div>
              </div>
            </div>
        </div>
        </div>

        <?php endforeach;?>
<?php endif;?>
</div>
<?php if(count($statusGoals) != 0):?>
              <div class="col-md-12">
<div class="row">
 <h4 class="page-header">اهداف شاخص</h4>
 <?php foreach ($statusGoals as $goal): ?>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-primary">
              <div class="panel-body" style="background-color: #5CB85C">
              
                <div class="text-center">
                    <h3 style="color: white"><?php echo h($goal['Goal']['name']); ?></h3>
                </div>
              </div>
              <div class="panel-footer">
              <div class="row">
                <div class="col-xs-12">
                <div> <?php echo $goal['Node']['title']; ?></div>
                </div>
              </div>
              <hr/>
              <div class="row">
                <div class="col-xs-12">
                <?php echo $this->Html->link('مشاهده هدف',array('controller'=>'goals','action'=>'view',$goal['Goal']['id']),array('class'=>"btn btn-block btn-success")); ?>
                </div>
               
              </div>
              </div>
            </div>
        </div></div>
        <?php endforeach;?>
<?php endif;?>
        </div>
        </div>
        </div>