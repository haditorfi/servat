<?php echo $this->Form->create('User',array('class'=>'js-login js-toggle uk-form tm-form',
	'inputDefaults' => array(
        'label' => false,
        'div' => false,
        'class'=>'uk-form-large uk-width-1-1'
    )));
?>    
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <?php
                if ($profile !=" ") {
                 echo $this->Html->link("ﮐﺎﺭﺑﺮ: $profile".__(''), array('controller' => '', 'action' => 'index'), array('escape' => false,'class'=>'navbar-brand')); 
                }else{
                   echo $this->Html->link("صفحه خانگی".__(''), array('controller' => 'pages', 'action' => 'index'), array('escape' => false,'class'=>'btn btn-primary','style'=>'margin:10px')); 
                   echo $this->Html->link("ورود".__(''), array('controller' => 'users', 'action' => 'login'), array('escape' => false,'class'=>'btn btn-success','style'=>'margin:10px')); 
                }
                ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <?php
                       echo $this->Html->link("برنامه ی ثروتمندان".__(''), array('controller' => 'pages', 'action' => 'index'), array('escape' => false));  
                       ?>
                    </li>
                </ul>
<?php
            if ($profile !=" ") {
                        echo $this->Html->link("ﺧﺮﻭﺝ".__(''), array('controller' => 'users', 'action' => 'logout'), array('escape' => false,'class'=>'btn btn-danger','style'=>'margin:10px;float:left'));  
                        
                                     }
?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br/><br/>
<div class="pk-system-messages">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Flash->render() ?>
</div>
<div class="uk-panel uk-panel-box" style="padding-bottom:0px;">
    <div class="uk-form-row">
    <?php echo $this->Form->input('name',array('autofocus','placeholder'=>'نام'));?>
    </div>

    <div class="uk-form-row">
    <?php echo $this->Form->input('family',array('placeholder'=>'نام خانوادگی'));?>
    </div>

    <div class="uk-form-row">
    <?php echo $this->Form->input('username',array('placeholder'=>'نام کاربری'));?>
    </div>

    <div class="uk-form-row">
    <?php echo $this->Form->input('password',array('placeholder'=>'رمز عبور'));?>
    </div>

    <div class="uk-form-row">
    <?php echo $this->Form->input('email',array('placeholder'=>'ایمیل'));?>
    </div>

    <p class="uk-form-row tm-panel-marginless-bottom">
    <?php echo $this->Form->button(__('ثبت نام'),array('class'=>'uk-button uk-button-success uk-button-large uk-width-1-1','div'=>false));?>
    </p>

</div>

<?php echo $this->Form->end(); ?>
