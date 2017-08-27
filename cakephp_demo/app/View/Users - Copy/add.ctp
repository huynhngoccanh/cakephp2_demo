<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirm', array('label' => 'Confirm Password', 'maxLength' => 50, 'title' => 'Confirm password', 'type'=>'password'));
		echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 255, 'title' => 'Email', 'type'=>'text'));
		echo $this->Form->input('phone', array('label' => 'Phone', 'maxLength' => 20, 'title' => 'Phone', 'type'=>'text'));
		echo $this->Form->input('pin', array('label' => 'Pin', 'maxLength' => 10, 'title' => 'Pin', 'type'=>'text'));
		//echo $this->Form->input('group_id', array('options' => $groups, 'empty'=>'--SELECT GROUP--'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>