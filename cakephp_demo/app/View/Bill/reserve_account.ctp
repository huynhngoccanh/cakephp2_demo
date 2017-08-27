<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('TK dự trữ'); ?></legend>
	</fieldset>
	<?php echo $this->Form->input('head', array('label' => false, 'maxLength' => 255, 'type'=>'hidden', 'value' => 'Bill', 'id' => 'headField'));?>
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
		        <label for="">mã thẻ cào</label>
		    </div>
		    <div class="tb-input">
		        <?php echo $this->Form->input('tag_code', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
		    </div>
		</div>
		<div class="tb" >
			<div class="tb-lb">
				<label for="">&nbsp;</label>
			</div>
			<div class="tb-input"><?php echo $this->Form->select('reserve', $dataReserve,  ['empty' => '(choose one)','default' => '0' ]);?></div>
		</div>
		<!-- group 1 start -->
		<div class="BillReserve_1">
			<div class="tb">
				<div class="tb-lb">
					<label for="">số tiền</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('money', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 1 end -->
		
		<!-- group 2 start -->
		<div class="BillReserve_2">
			<div class="tb">
				<div class="tb-lb">
					<label for=""> số điện thoại</label>
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
		</div>
		<!-- group 2 end -->
		<!-- group 3 start -->
		<div class="BillReserve_3">
			<div class="tb">
				<div class="tb-lb">
					<label for="">mã KH</label>
				</div>
				<div class="tb-input">
					<?php echo $this->Form->input('code_client', array('label' => false, 'maxLength' => 255, 'type'=>'text'));?>
				</div>
			</div>
		</div>
		<!-- group 3 end -->
		<!-- group 4 start -->
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