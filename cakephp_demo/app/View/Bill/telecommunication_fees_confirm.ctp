<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Cước viễn thông'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Cước viễn thông</label>
		    </div>
		    <div class="tb-input">
				<?php echo $dataTelecommunicationFees[$data['Bill']['telecommunication_fees']];?>
		    </div>
		</div>
		<!-- group 1 start -->
		<?php if ($data['Bill']['telecommunication_fees'] == 1):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input">
					<?php echo $data['Bill']['money'];?>
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
		<?php endif;?>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<?php if ($data['Bill']['telecommunication_fees'] == 2):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số điện thoại</label>
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
		<?php endif;?>
		<!-- group 2 end -->
		<!-- group 3 start -->
		<?php if ($data['Bill']['telecommunication_fees'] == 3):?>
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
		<?php endif;?>
		<!-- group 3 end -->
		<!-- group 4 start -->
		<?php if ($data['Bill']['telecommunication_fees'] == 4):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số điện thoại</label>
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
					 <?php echo $dataMoneySL[$data['Bill']['money_sl']];?>
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
		<?php endif;?>
		<!-- group 4 end -->
		<!-- group 5 start -->
		<?php if ($data['Bill']['telecommunication_fees'] == 5):?>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> mã KH </label>
				</div>
				<div class="tb-input">
					<?php echo $data['Bill']['code_client'];?>
				</div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input">
					<?php echo $dataMoneySL[$data['Bill']['money_sl']];?>
				</div>
			</div>
		<?php endif;?>
		<!-- group 5 end -->
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