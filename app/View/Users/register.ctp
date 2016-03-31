<div class="pk-system-messages">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Flash->render() ?>
</div>
<?php echo $this->Form->create('User',array('class'=>'js-login js-toggle uk-form tm-form',
	'inputDefaults' => array(
        'label' => false,
        'div' => false,
        'class'=>'uk-form-large uk-width-1-1'
    )));

	?>    

<div class="uk-panel uk-panel-box" style="padding-bottom:0px;">

<h3 style="color:blue"><?php echo __('ثبت نام کاربر جدید'); ?></h3>
<hr>
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
