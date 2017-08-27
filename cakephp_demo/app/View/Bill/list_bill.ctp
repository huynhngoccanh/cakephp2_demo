<?php echo $this->Form->create('Bill', array('type' => 'get')); ?>
	<fieldset>
		<legend><?php echo __('List Bill'); ?></legend>
	</fieldset>
	<div class="tb">
		<div class="tb-lb">
			<label for="">Tài khoản</label>
		</div>
		<div class="tb-input">
			<?php echo $this->Form->select('list_category', $dataListCategory,  ['empty' => '(choose one)','default' => '0' ]);?>
		</div>
	</div>
    <input type="submit" name="confirm" value="confirm" class="btn_view"/>
<?php echo $this->Form->end(__('Submit')); ?>

<?php if ($errorView == ""): ?>
	<br/>
	<?php
		echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
		echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers
		echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
		echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
	?> 
	<?php if ($data['Bill']['list_category'] == 1): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
				<td>Cấp 6</td>
				<td>Cấp 7</td>
				<td>Cấp 8</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><?php echo $dataTypeAccount[$item['Bill']['type_account']];?></td>
					<?php if ($item['Bill']['type_account'] == 1): ?>
						<?php if ($item['Bill']['in_bank'] == 1): ?>
							<td><p><?php echo $dataInBank[$item['Bill']['in_bank']];?>:</p><?php echo $item['Bill']['phone'];?></td>
							<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
							<td><p>Nội dung:</p><?php echo $item['Bill']['contain'];?></td>
							<td><p>Số tài khoản:</p><?php echo $item['Bill']['acc_agri'];?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						<?php endif;?>
						<?php if ($item['Bill']['in_bank'] == 2): ?>
							<td><p><?php echo $dataInBank[$item['Bill']['in_bank']];?>:</p><?php echo $item['Bill']['number_acc'];?></td>
							<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
							<td><p>Nội dung:</p><?php echo $item['Bill']['contain'];?></td>
							<td><p>Số tài khoản:</p><?php echo $item['Bill']['acc_agri'];?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						<?php endif;?>
					<?php endif;?>
					<?php if ($item['Bill']['type_account'] == 2): ?>
						<?php if ($item['Bill']['out_bank'] == 1): ?>
							<td><p><?php echo $dataOutBank[$item['Bill']['out_bank']];?>:</p><?php echo $dataBank[$item['Bill']['bank']];?></td>
							<td><p>Họ tên người nhận:</p><?php echo $item['Bill']['receiver'];?></td>
							<td><p>số tài khoản:</p><?php echo $item['Bill']['number_acc'];?></td>
							<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
							<td><p>Nội dung:</p><?php echo $item['Bill']['contain'];?></td>
							<td><p>Số tài khoản:</p><?php echo $item['Bill']['acc_agri'];?></td>
						<?php endif;?>
						<?php if ($item['Bill']['out_bank'] == 2): ?>
							<td><p>số thẻ:</p><?php echo $item['Bill']['card'];?></td>
							<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><p>Số tài khoản:</p><?php echo $item['Bill']['acc_agri'];?></td>
						<?php endif;?>
					<?php endif;?>
					<?php if ($item['Bill']['type_account'] == 3): ?>
						<td><p>Nhập TK:</p><?php echo $item['Bill']['number_acc'];?></td>
						<td><p>số thẻ:</p><?php echo $item['Bill']['card'];?></td>
						<td>&nbsp;</td>
						<td><p>Số tài khoản:</p><?php echo $item['Bill']['acc_agri'];?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php if ($data['Bill']['list_category'] == 2): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
				<td>Cấp 6</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><p>Cước viễn thông:</p><?php echo $dataTelecommunicationFees[$item['Bill']['telecommunication_fees']];?></td>
					<?php if ($item['Bill']['telecommunication_fees'] == 1): ?>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
						<td><?php echo $item['Bill']['acc_agri'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<?php if ($item['Bill']['telecommunication_fees'] == 2): ?>
						<td><p>số điện thoại:</p><?php echo $item['Bill']['phone'];?></td>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
						<td><?php echo $item['Bill']['acc_agri'];?></td>
					<?php endif;?>
					<?php if ($item['Bill']['telecommunication_fees'] == 3): ?>
						<td><p>thẻ cào:</p><?php echo $dataMobile[$item['Bill']['type_card']];?></td>
						<?php if ($item['Bill']['type_card'] != 6):?>
							<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
							<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
							<td><?php echo $item['Bill']['acc_agri'];?></td>
						<?php else:?>
							<td><p>TK dự trữ:</p><?php echo $item['Bill']['number_acc'];?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						<?php endif;?>
					<?php endif;?>
					<?php if ($item['Bill']['telecommunication_fees'] == 4): ?>
						<td><p>số điện thoại:</p><?php echo $item['Bill']['phone'];?></td>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
						<td><?php echo $item['Bill']['acc_agri'];?></td>
					<?php endif;?>
					<?php if ($item['Bill']['telecommunication_fees'] == 5): ?>
						<td><p>mã KH:</p><?php echo $item['Bill']['code_client'];?></td>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php if ($data['Bill']['list_category'] == 3): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><p>Dịch vụ:</p><?php echo $dataService[$item['Bill']['payment_service']];?></td>
					<?php if ($item['Bill']['payment_service'] == 1): ?>
						<td><p>Số của tôi:</p><?php echo $dataElectricity[$item['Bill']['electricity']];?></td>
						<?php if ($item['Bill']['electricity'] == 2): ?>
							<td><p>Đăng ký thanh toán định kỳ:</p><?php echo $dataRegist[$item['Bill']['regist']];?></td>
						<?php else:?>
							<td>&nbsp;</td>
						<?php endif;?>
						<td><p>Mã KH:</p><?php echo $item['Bill']['code_client'];?></td>
					<?php endif;?>
					<?php if ($item['Bill']['payment_service'] == 2): ?>
						<td><p>Thành phố:</p><?php echo $dataCity[$item['Bill']['city']];?></td>
						<td><p>Mã KH:</p><?php echo $item['Bill']['code_client'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<?php if ($item['Bill']['payment_service'] == 3): ?>
						<td><p>Game:</p><?php echo $dataGame[$item['Bill']['game']];?></td>					
						<td><p>Mã KH:</p><?php echo $item['Bill']['code_client'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<?php if ($item['Bill']['payment_service'] == 4): ?>
						<td><p>Truyền hình:</p><?php echo $dataTivi[$item['Bill']['tivi']];?></td>					
						<td><p>Mã thanh toán:</p><?php echo $item['Bill']['payment_code'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php if ($data['Bill']['list_category'] == 4): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
				<td>Cấp 6</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><p>Nhập TK:</p><?php echo $item['Bill']['number_acc'];?></td>
					<td><p>Mã thẻ cào:</p><?php echo $item['Bill']['tag_code'];?></td>
					<td><?php echo $item['Bill']['reserve'];?></td>
					<?php if ($item['Bill']['reserve'] == 1): ?>
						<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<?php if ($item['Bill']['reserve'] == 2): ?>
						<td><p>Số điện thoại:</p><?php echo $item['Bill']['phone'];?></td>
						<td><p>Số tiền:</p><?php echo $item['Bill']['money'];?></td>
					<?php endif;?>
					<?php if ($item['Bill']['reserve'] == 3): ?>
						<td><p>mã KH:</p><?php echo $item['Bill']['code_client'];?></td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php if ($data['Bill']['list_category'] == 5): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><p>Tài khoản:</p><?php echo $dataAccount[$item['Bill']['account']];?></td>
					<?php if ($item['Bill']['account'] == 1): ?>
						<td><p>Tra cứu:</p><?php echo $dataSearch[$item['Bill']['search']];?></td>
						<?php if ($item['Bill']['search'] != 5): ?>
							<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
							<td><?php echo $item['Bill']['acc_agri'];?></td>
						<?php else:?>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						<?php endif;?>
					<?php endif;?>
					<?php if ($item['Bill']['account'] == 2): ?>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php if ($data['Bill']['list_category'] == 6): ?>
		<table>
			<tr>
				<td>id</td>
				<td>Cấp 1</td>
				<td>Cấp 2</td>
				<td>Cấp 3</td>
				<td>Cấp 4</td>
				<td>Cấp 5</td>
			</tr>
		<?php foreach($dataBill as $key => $item):?>
				<tr>
					<td><?php echo $item['Bill']['id'];?></td>
					<td><p>số điện thoại:</p><?php echo $item['Bill']['phone'];?></td>
					<td><p>thẻ cào:</p><?php echo $dataMobile[$item['Bill']['type_card']];?></td>
					<?php if ($item['Bill']['type_card'] != 6):?>
						<td><p>số tiền:</p><?php echo $item['Bill']['money'];?></td>
						<td><p>Thuộc tài khoản:</p><?php echo $dataAccMoney[$item['Bill']['acc_money']];?></td>
						<td><?php echo $item['Bill']['acc_agri'];?></td>
					<?php else:?>
						<td><p>TK dự trữ:</p><?php echo $item['Bill']['number_acc'];?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					<?php endif;?>
					<td><p>Ngày thực hiện:</p><?php echo $item['Bill']['created_date'];?></td>
				</tr>	
		<?php endforeach;?>
		</table>
	<?php endif;?>
	<?php
		echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
		echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers
		echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
		echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
	?> 
<?php else: ?>
	<br/><p style="color: red"><?php echo $errorView;?></p>
<?php endif;?>
