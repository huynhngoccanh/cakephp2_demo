<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Nạp tiền điện thoại'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
			<div class="tb-lb">
				<label for="">Số điện thoại</label>
			</div>
			<div class="tb-input">
				<?php echo $this->Form->select('phone', $dataPhone,  ['empty' => '(choose one)','default' => '0']);?>
			</div>
		</div>
		<div class="tb">
			<div class="tb-lb">
				<label for="">Thẻ cào</label>
			</div>
			<div class="tb-input">
				<?php echo $this->Form->select('type_card', $dataMobile,  ['empty' => '(choose one)','default' => '0' ]);?>
			</div>
		</div>
		<div class="BillTypeCard_1 BillTypeCard_2 BillTypeCard_3 BillTypeCard_4 BillTypeCard_5">
			<div class="tb">
				<div class="tb-lb">
					<label for="">Mã thẻ cào</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('tag_code', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('money_card', array('label' => false, 'maxLength' => 255, 'type'=>'text', 'readonly' => 'readonly'));?>
				</div>
			</div>
			<div>
				<div class="tb">
					<div class="tb-lb">
						<label for="">Thuộc tài khoản</label>
					</div>
					<div class="tb-input">				        
						<?php echo $this->Form->select('acc_money', $dataAccMoney,  ['default' => '1']);?>
					</div>
				</div>
				<div class="tb">
					<div class="tb-lb">
						<label for="">&nbsp;</label>
					</div>
					<div class="tb-input">
						<?php echo $this->Form->input('acc_agri', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
					</div>
				</div>
			</div>
		</div>
		<div class="BillTypeCard_6">
			<div class="tb">
				<div class="tb-lb">
					<label for="">TK dự trữ</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('number_acc', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
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