<!--html>
<body>

<div class="form-box" id="login-box">
	<div class="header">Sign In</div>
		
        <?=$this->Form->create();?>

				<?=$this->Form->input('username');?>

				<?=$this->Form->input('password');?>
			<input type="submit" name="login" value="Login" class="btn_view"/>
		<?=$this->Form->end();?>
</div>
</body>
</html -->

<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
    <input type="submit" name="login" value="Login" class="btn_view"/>
<?php echo $this->Form->end(__('Submit')); ?>