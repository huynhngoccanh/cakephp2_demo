<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Tài khoản'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Tài khoản</label>
		    </div>
		    <div class="tb-input">
		        <?php echo $this->Form->select('account', $dataAccount,  ['empty' => '(choose one)','default' => '0' ]);?>
		    </div>
		</div>
		<!-- group 1 start -->
		<div class="BillAccount_1">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Tra cứu</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->select('search', $dataSearch,  ['empty' => '(choose one)','default' => '0' ]);?></div>
			</div>
			
			<!--div class="BillSearch_1 BillSearch_2 BillSearch_3 BillSearch_4"-->
			<div class="BillSearch_1 BillSearch_2 BillSearch_3 BillSearch_4">
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
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<div class="BillAccount_2">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input"><?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?></div>
			</div>
		</div>
		<!-- group 2 end -->
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