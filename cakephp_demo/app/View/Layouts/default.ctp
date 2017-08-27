<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>	
	<?php echo $this->Html->script('jquery-1.11.3.min'); ?>
	<?php echo $this->Html->script('function'); ?>
</head>
<body>
	<div id="container">
		<?php if($controller == 'bill'): ?>
		<div id="header">
			<?php
			if ($action != 'finish' && $action != 'listbill') {
				if ($action == 'index' || $action == 'transfersconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">Chuyển tiền</a>";
				} else {
					echo $this->Html->link('Chuyển tiền', '/bill',array('class' => 'btn_view_menu'));
				}
				if ($action == 'telecommunicationfees' || $action == 'telecommunicationfeesconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">Cước viễn thông</a>";
				} else {
					echo $this->Html->link('Cước viễn thông', '/bill/telecommunicationFees',array('class' => 'btn_view_menu'));
				}				
				if ($action == 'paymentservice' || $action == 'paymentserviceconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">Thanh toán dịch vụ</a>";
				} else {
					echo $this->Html->link('Thanh toán dịch vụ', '/bill/paymentService',array('class' => 'btn_view_menu'));
				}				
				if ($action == 'reserveaccount' || $action == 'reserveaccountconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">TK dự trữ</a>";
				} else {
					echo $this->Html->link('TK dự trữ', '/bill/reserveAccount',array('class' => 'btn_view_menu'));
				}				
				if ($action == 'account' || $action == 'accountconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">Tài khoản</a>";
				} else {
					echo $this->Html->link('Tài khoản', '/bill/account',array('class' => 'btn_view_menu'));
				}
				if ($action == 'mobile' || $action == 'mobileconfirm') {
					echo "<a class=\"btn_view_menu btn_view_menu_active\">Nạp tiền điện thoại</a>";
				} else {
					echo $this->Html->link('Nạp tiền điện thoại', '/bill/mobile',array('class' => 'btn_view_menu'));
				}
				echo $this->Html->link('List thanh toán', '/bill/listBill',array('class' => 'btn_view_menu'));
			}
			?>
		</div>
		<?php endif;?>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!--div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div-->
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
