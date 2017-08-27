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
		        <?php echo $dataTypeAccount[$data['Bill']['type_account']];?>
		    </div>
		</div>
		<?php if ($data['Bill']['type_account'] == 1):?>
			<!-- group 1 start -->
				<div class="tb" >
					<div class="tb-lb">
						<label for="">Trong ngân hàng</label>
					</div>
					<div class="tb-input">
						<?php echo $dataInBank[$data['Bill']['in_bank']];?>
					</div>
				</div>
				<?php if ($data['Bill']['in_bank'] == 1):?>
					<div class="tb">
						<div class="tb-lb">
							<label for="">theo số điện thoại</label>
						</div>
						<div class="tb-input">
							<?php echo $dataPhone[$data['Bill']['phone']];?>
						</div>
					</div>
					<div class="tb">
						<div class="tb-lb">
							<label for="">số tiền</label>
						</div>
						<div class="tb-input">
							<?php echo $data['Bill']['money'];?>
						</div>
					</div>
					<div class="tb">
						<div class="tb-lb">
							<label for="">nội dung</label>
						</div>
						<div class="tb-input">
							<?php echo $data['Bill']['contain'];?>
						</div>
					</div>
				<?php elseif ($data['Bill']['in_bank'] == 2):?>
					<div class="tb">
						<div class="tb-lb">
							<label for="">số tài khoản</label>
						</div>
						<div class="tb-input">
							<?php echo $data['Bill']['number_acc'];?>
						</div>
					</div>
					<div class="tb">
						<div class="tb-lb">
							<label for="">số tiền</label>
						</div>
						<div class="tb-input">
							<?php echo $data['Bill']['money'];?>
						</div>
					</div>
					<div class="tb">
						<div class="tb-lb">
							<label for="">nội dung</label>
						</div>
						<div class="tb-input">
							<?php echo $data['Bill']['contain'];?>
						</div>
					</div>
				<?php endif;?>
			<!-- group 1 end -->
		<?php elseif ($data['Bill']['type_account'] == 2):?>
			<!-- group 2 start -->
			<div class="tb">
			    <div class="tb-lb">
			        <label for="">Ngoài ngân hàng</label>
			    </div>
			    <div class="tb-input">
					<?php echo $dataOutBank[$data['Bill']['out_bank']];?>
			    </div>
			</div>
			<?php if ($data['Bill']['out_bank'] == 1):?>
				<div class="tb">
				    <div class="tb-lb">
				        <label for="">theo số tài khoản</label>
				    </div>
				    <div class="tb-input">
						<?php echo $dataBank[$data['Bill']['bank']];?>	
				    </div>
				</div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">Họ tên người nhận</label>
				    </div>
				    <div class="tb-input">
						<?php echo $dataReceiver[$data['Bill']['receiver']];?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tài khoản</label>
				    </div>
				    <div class="tb-input">
						<?php echo $data['Bill']['number_acc'];?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $data['Bill']['money'];?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">nội dung</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $data['Bill']['contain'];?>
				    </div>
			    </div>
			<?php elseif ($data['Bill']['out_bank'] == 2):?>
				<div class="tb">
				    <div class="tb-lb">
				        <label for="">số thẻ</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $data['Bill']['card'];?>
				    </div>
			    </div>
			    <div class="tb">
				    <div class="tb-lb">
				        <label for="">số tiền</label>
				    </div>
				    <div class="tb-input">
				        <?php echo $data['Bill']['money'];?>
				    </div>
			    </div>
			<?php endif;?>
			<!-- group 2 end -->
		<?php elseif ($data['Bill']['type_account'] == 3):?>
			<!-- group 3 start -->
			<div class="tb">
			    <div class="tb-lb">
			        <label for="">Nhập TK</label>
			    </div>
			    <div class="tb-input">
					<?php echo $data['Bill']['number_acc'];?>
			    </div>
			</div>
		    <div class="tb">
			    <div class="tb-lb">
			        <label for="">số thẻ</label>
			    </div>
			    <div class="tb-input">
			        <?php echo $data['Bill']['card'];?>
			    </div>
		    </div>
			<!-- group 3 end -->
		<?php endif;?>	
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