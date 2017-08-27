<!-- View/Users/login.ctp -->
<?php echo $this->Session->flash('auth'); ?>

<!-- Start login -->
<?php echo $this->Form->create('User'); ?>
<div class="table margintop10 paddingright50 table_login borderAll fm_login">
	<div class="tr">
		<div class="bg_orange2 border_right_bottom td_left">Username</div>
		<div class="td bg_orange3 border_bottom left paddingleft5 vcenter">
			<!-- <input type="text" class="width150" maxlength="16" /> -->
			<?php
				echo $this->Form->input('username', array(
					'label' =>false,
					'class'=> 'width150',
					'maxlength' => 16,
					'div' => false
				));
			?>
		</div>
	</div>
	<div class="tr">
		<div class="bg_orange2 border_right_bottom td_left">Password</div>
		<div class="td bg_orange3 border_bottom left paddingleft5 vcenter">
			<!-- <input type="password" class="width150" maxlength="16" /> -->
			<?php
				echo $this->Form->input('password', array(
					'label' =>false,
					'class'=> 'width150',
					'maxlength' => 16,
					'div' => false
				));
			?>
		</div>
	</div>
	<div class="tr">
		<div class="bg_orange2 border_right td_left"></div>
		<div class="td bg_orange3 right">
			<!-- <img src="img/login_off.gif" alt="Login" class="vcenter" /> -->
			<?php
				echo $this->Form->submit('/img/login_off.gif', array('div' => false, 'class' => 'vcenter', 'alt' => 'Login'));
			?>
		</div>
	</div>
</div>
<?php echo $this->Form->end(); ?>
<!-- End login -->


