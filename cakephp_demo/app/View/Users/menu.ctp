<fieldset>
		<legend><?php echo __('Menu'); ?></legend>
</fieldset>
<?php echo $this->Html->link(
    'Đăng ký thông tin thanh toán',
    '/bill'
); ?><br/>
<?php echo $this->Html->link(
    'List thanh toán',
    '/bill/listBill'
);?><br/>
<?php /*echo $this->Html->link(
    'Chỉnh sửa tài khoản',
    '/users/edit'
); */?>