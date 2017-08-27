<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Thanh toán dịch vụ'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">dịch vụ</label>
		    </div>
		    <div class="tb-input">
				<?php echo $dataService[$data['Bill']['payment_service']];?>
		    </div>
		</div>
		<!-- group 1 start -->
		<?php if ($data['Bill']['payment_service'] == 1):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Số của tôi</label>
				</div>
				<div class="tb-input"><?php echo $dataElectricity[$data['Bill']['electricity']];?></div>
			</div>
			<?php if ($data['Bill']['electricity'] == 2):?>
				<div class="tb">
					<div class="tb-lb">
						<label for=""> đăng ký thanh toán định kỳ</label>
					</div>
					<div class="tb-input"><?php echo $dataRegist[$data['Bill']['regist']];?></div>
				</div>
			<?php endif;?>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['code_client'];?></div>
			</div>
		<?php endif;?>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<?php if ($data['Bill']['payment_service'] == 2):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Thành phố</label>
				</div>
				<div class="tb-input"><?php echo $dataCity[$data['Bill']['city']];?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['code_client'];?></div>
			</div>
		<?php endif;?>
		<!-- group 2 end -->
		<!-- group 3 start -->
		<?php if ($data['Bill']['payment_service'] == 3):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Game</label>
				</div>
				<div class="tb-input"><?php echo $dataGame[$data['Bill']['game']];?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['code_client'];?></div>
			</div>
		<?php endif;?>
		<!-- group 3 end -->
		<!-- group 4 start -->
		<?php if ($data['Bill']['payment_service'] == 4):?>
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Truyền hình</label>
				</div>
				<div class="tb-input"><?php echo $dataTivi[$data['Bill']['tivi']];?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">mã thanh toán</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['payment_code'];?></div>
			</div>
		<?php endif;?>
		<!-- group 4 end -->
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Pin</label>
		    </div>
		    <div class="tb-input"><?php echo $data['Bill']['pin'];?></div>
		</div>
    <input type="button" name="back" value="Back" class="btn_view js_submit_form" data="/bill" />
    <input type="submit" name="btn_regist" value="Regist" class="btn_view js_submit_form_confirm"/>
<?php echo $this->Form->end(__('Submit')); ?>