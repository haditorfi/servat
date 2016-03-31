
<?php echo $this->Form->create('User',array('class'=>'js-login js-toggle uk-form tm-form',
	'inputDefaults' => array(
        'label' => false,
        'div' => false,
        'class'=>'uk-form-large uk-width-1-1'
    )));

	?>    
<div class="uk-panel uk-panel-box" style="padding-bottom:0px;">

    <div class="uk-form-row">
    <?php echo $this->Form->input('username',array('autofocus','placeholder'=>'نام کاربری'));?>
    </div>

    <div class="uk-form-row">
    <?php echo $this->Form->input('password',array('value'=>'','placeholder'=>'رمز عبور'));?>
    </div>

<div class="pk-system-messages" style="color: red">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Flash->render() ?>
</div>

    <p class="uk-form-row tm-panel-marginless-bottom">
    <?php echo $this->Form->button(__('ورود'),array('class'=>'uk-button uk-button-primary uk-button-large uk-width-1-1','div'=>false));?>
    </p>

</div>

<?php echo $this->Form->end(); ?>
