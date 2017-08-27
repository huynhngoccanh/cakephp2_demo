<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('TK dự trữ'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">Nhập TK</label>
		    </div>
		    <div class="tb-input"><?php echo $data['Bill']['number_acc'];?></div>
		</div>
		<div class="tb">
		    <div class="tb-lb">
		        <label for="">mã thẻ cào</label>
		    </div>
		    <div class="tb-input"><?php echo $data['Bill']['tag_code'];?></div>
		</div>
		<div class="tb" >
			<div class="tb-lb">
				<label for="">&nbsp;</label>
			</div>
			<div class="tb-input"><?php echo $dataReserve[$data['Bill']['reserve']];?></div>
		</div>
		<!-- group 1 start -->
		<?php if ($data['Bill']['reserve'] == 1):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['money'];?></div>
			</div>
		<?php endif;?>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<?php if ($data['Bill']['reserve'] == 2):?>
			<div class="tb">
				<div class="tb-lb">
					<label for=""> số điện thoại</label>
				</div>
				<div class="tb-input"><?php echo $dataPhone[$data['Bill']['phone']];?></div>
			</div>
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['money'];?></div>
			</div>
		<?php endif;?>
		<!-- group 2 end -->
		<!-- group 3 start -->
		<?php if ($data['Bill']['reserve'] == 3):?>
			<div class="tb">
				<div class="tb-lb">
					<label for="">mã KH</label>
				</div>
				<div class="tb-input"><?php echo $data['Bill']['code_client'];?></div>
			</div>
		<?php endif;?>
		<!-- group 3 end -->
		<!-- group 4 start -->
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