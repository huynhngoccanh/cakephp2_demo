<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Chuyển tiền'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Tài khoản</label>
		    </div>
		    <div class="tb-input">
		        <?php echo $this->Form->select('type_account', $dataTypeAccount,  ['empty' => '(choose one)','default' => '0' ]);?>
		    </div>
		</div>
		<!-- group 1 start -->
		<div class="BillTypeAccount_1">
			<div class="tb" >
				<div class="tb-lb">
					<label for="">Trong ngân hàng</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->select('in_bank', $dataInBank,  ['empty' => '(choose one)','default' => '0','id' => 'BillTypeAccountChild1']);?>
				</div>
			</div>
			<div class="BillTypeAccountChild1_1">
				<div class="tb">
				    <div class="tb-lb">
				        <label for="">theo số điện thoại</label>
				    </div>
				    <div class="tb-input">				        
				        <?php echo $this->Form->select('phone', $dataPhone,  ['empty' => '(choose one)','default' => '0']);?>
				    </div>
				</div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">nội dung</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->textarea('contain') ?>
				    </div>
			    </div>
			</div>
			
			<div class="BillTypeAccountChild1_2" class="view_none">
				<div class="tb">
				    <div class="tb-lb">
				        <label for="">số tài khoản</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('number_acc', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">nội dung</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->textarea('contain') ?>
				    </div>
			    </div>
			</div>
		</div>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<div class="BillTypeAccount_2">
			<div class="tb">
			    <div class="tb-lb">
			        <label for="">Ngoài ngân hàng</label>
			    </div>
			    <div class="tb-input">
			        <?php echo $this->Form->select('out_bank', $dataOutBank,  ['empty' => '(choose one)','default' => '0','id' => 'BillTypeAccountChild2']);?>
			    </div>
			</div>
			<div class="BillTypeAccountChild2_1">
				<div class="tb">
				    <div class="tb-lb">
				        <label for="">theo số tài khoản</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->select('bank', $dataBank,  ['empty' => '(choose one)','default' => '0' ]);?>	
				    </div>
				</div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">Họ tên người nhận</label>
				    </div>
				    <div class="tb-input">
						<?php echo $this->Form->select('receiver', $dataReceiver,  ['empty' => '(choose one)','default' => '0' ]);?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tài khoản</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('number_acc', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">nội dung</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->textarea('contain') ?>
				    </div>
			    </div>
			</div>
			<div class="BillTypeAccountChild2_2">
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số thẻ</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('card', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				    </div>
			    </div>
			</div>
		</div>
		
		<!-- group 2 end -->
		<!-- group 3 start -->
		<div class="BillTypeAccount_3">
			<div class="tb">
			    <div class="tb-lb">
			        <label for="">Nhập TK</label>
			    </div>
			    <div class="tb-input">
			        <?php echo $this->Form->input('number_acc', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
			    </div>
			</div>
		    <div class="tb">
			    <div class="tb-lb">
			        <label for="">số thẻ</label>
			    </div>
			    <div class="tb-input">
			        <?php echo $this->Form->input('card', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
			    </div>
		    </div>
		</div>
		<!-- group 3 end -->
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