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
		        <?php echo $this->Form->select('payment_service', $dataService,  ['empty' => '(choose one)','default' => '0','id' => 'BillPaymentService']);?>
		    </div>
		</div>
		<!-- group 1 start -->
		<div class="BillPaymentService_1">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Số của tôi</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->select('electricity', $dataElectricity,  ['empty' => '(choose one)','default' => '0' ]);?></div>
			</div>
			<div class="BillElectricity_2">
				<div class="tb">
					<div class="tb-lb">
						<label for=""> đăng ký thanh toán định kỳ</label>
					</div>
					<div class="tb-input"><?php echo $this->Form->select('regist', $dataRegist,  ['empty' => '(choose one)','default' => '0' ]);?></div>
				</div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('code_client', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<div class="BillPaymentService_2">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Thành phố</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->select('city', $dataCity,  ['empty' => '(choose one)','default' => '0' ]);?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('code_client', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 2 end -->
		<!-- group 3 start -->
		<div class="BillPaymentService_3">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Game</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->select('game', $dataGame,  ['empty' => '(choose one)','default' => '0' ]);?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('code_client', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 3 end -->
		<!-- group 4 start -->
		<div class="BillPaymentService_4">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Truyền hình</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->select('tivi', $dataTivi,  ['empty' => '(choose one)','default' => '0' ]);?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">mã thanh toán</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('payment_code', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 4 end -->
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Pin</label>
		    </div>
		    <div class="tb-input">
		        <?php echo $this->Form->input('pin', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
		    </div>
		</div>
    <input type="submit" name="confirm" value="confirm" class="btn_view"/>
<?php echo $this->Form->end(__('Submit')); ?>