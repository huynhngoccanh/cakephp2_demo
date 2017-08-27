<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Tài khoản'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Tài khoản</label>
		    </div>
		    <div class="tb-input"><?php echo $dataAccount[$data['Bill']['account']];?></div>
		</div>
		<!-- group 1 start -->
		<?php if ($data['Bill']['account'] == 1):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Tra cứu</label>
				</div>
				<div class="tb-input"><?php echo $dataSearch[$data['Bill']['search']];?></div>
			</div>
			<?php if ($data['Bill']['search'] != 5):?>
				<div class="tb">
					<div class="tb-lb">
						<label for="">Thuộc tài khoản</label>
					</div>
					<div class="tb-input"><?php echo $dataAccMoney[$data['Bill']['acc_money']];?></div>
				</div>
				<div class="tb">
					<div class="tb-lb">
						<label for="">&nbsp;</label>
					</div>
					<div class="tb-input"><?php echo $data['Bill']['acc_agri'];?></div>
				</div>
			<?php endif;?>
		<?php endif;?>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<?php if ($data['Bill']['account'] == 2):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['money'];?></div>
			</div>
		<?php endif;?>
		<!-- group 2 end -->
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Pin</label>
		    </div>
		    <div class="tb-input"><?php echo $data['Bill']['pin'];?></div>
		</div>
    <input type="button" name="back" value="Back" class="btn_view js_submit_form" data="/bill" />
    <input type="submit" name="btn_regist" value="Regist" class="btn_view js_submit_form_confirm"/>
<?php echo $this->Form->end(__('Submit')); ?>