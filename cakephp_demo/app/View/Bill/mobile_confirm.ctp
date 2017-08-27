<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Nạp tiền điện thoại'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
			<div class="tb-lb">
				<label for=""> số điện thoại</label>
			</div>
			<div class="tb-input"><?php echo $dataPhone[$data['Bill']['phone']];?></div>
		</div>
		<div class="tb">
			<div class="tb-lb">
				<label for="">thẻ cào</label>
			</div>
			<div class="tb-input">
				 <?php echo $dataMobile[$data['Bill']['type_card']];?>
			</div>
		</div>
		<?php if ($data['Bill']['type_card'] != 6):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">Mã thẻ cào</label>
				</div>
				<div class="tb-input">
					<?php echo $data['Bill']['tag_code'];?>
				</div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input">
					<?php echo $data['Bill']['money_card'];?>
				</div>
			</div>
			<div>
				<div class="tb">
					<div class="tb-lb">
						<label for="">Thuộc tài khoản</label>
					</div>
					<div class="tb-input">	<?php echo $dataAccMoney[$data['Bill']['acc_money']];?>	</div>
				</div>
				<div class="tb">
					<div class="tb-lb">
						<label for="">&nbsp;</label>
					</div>
					<div class="tb-input"><?php echo $data['Bill']['acc_agri'];?></div>
				</div>
			</div>	
		<?php else: ?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">TK dự trữ</label>
				</div>
				<div class="tb-input">
					<?php echo $data['Bill']['number_acc'];?>
				</div>
			</div>
		<?php endif;?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Pin</label>
		    </div>
		    <div class="tb-input">
		        <?php echo $data['Bill']['pin'];?>
		    </div>
		</div>
    <input type="button" name="back" value="Back" class="btn_view js_submit_form" data="/bill" />
    <input type="submit" name="btn_regist" value="Regist" class="btn_view js_submit_form_confirm"/>
<?php echo $this->Form->end(__('Submit')); ?>