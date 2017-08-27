<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Patients'); ?></h3>
	<?php if (!empty($user['Patient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Patient Code'); ?></th>
		<th><?php echo __('My Email'); ?></th>
		<th><?php echo __('Skype'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lng'); ?></th>
		<th><?php echo __('Enable'); ?></th>
		<th><?php echo __('Send1'); ?></th>
		<th><?php echo __('Email1'); ?></th>
		<th><?php echo __('Mail Name1'); ?></th>
		<th><?php echo __('Send2'); ?></th>
		<th><?php echo __('Email2'); ?></th>
		<th><?php echo __('Mail Name2'); ?></th>
		<th><?php echo __('Send3'); ?></th>
		<th><?php echo __('Email3'); ?></th>
		<th><?php echo __('Mail Name3'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Address1'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Patient'] as $patient): ?>
		<tr>
			<td><?php echo $patient['id']; ?></td>
			<td><?php echo $patient['user_id']; ?></td>
			<td><?php echo $patient['name']; ?></td>
			<td><?php echo $patient['patient_code']; ?></td>
			<td><?php echo $patient['my_email']; ?></td>
			<td><?php echo $patient['skype']; ?></td>
			<td><?php echo $patient['phone']; ?></td>
			<td><?php echo $patient['lat']; ?></td>
			<td><?php echo $patient['lng']; ?></td>
			<td><?php echo $patient['enable']; ?></td>
			<td><?php echo $patient['send1']; ?></td>
			<td><?php echo $patient['email1']; ?></td>
			<td><?php echo $patient['mail_name1']; ?></td>
			<td><?php echo $patient['send2']; ?></td>
			<td><?php echo $patient['email2']; ?></td>
			<td><?php echo $patient['mail_name2']; ?></td>
			<td><?php echo $patient['send3']; ?></td>
			<td><?php echo $patient['email3']; ?></td>
			<td><?php echo $patient['mail_name3']; ?></td>
			<td><?php echo $patient['created']; ?></td>
			<td><?php echo $patient['modified']; ?></td>
			<td><?php echo $patient['address1']; ?></td>
			<td><?php echo $patient['address2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patients', 'action' => 'view', $patient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patients', 'action' => 'edit', $patient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), array(), __('Are you sure you want to delete # %s?', $patient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Staffs'); ?></h3>
	<?php if (!empty($user['Staff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Staff Code'); ?></th>
		<th><?php echo __('Main-email'); ?></th>
		<th><?php echo __('Sub Email'); ?></th>
		<th><?php echo __('Enable'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Staff'] as $staff): ?>
		<tr>
			<td><?php echo $staff['id']; ?></td>
			<td><?php echo $staff['user_id']; ?></td>
			<td><?php echo $staff['name']; ?></td>
			<td><?php echo $staff['staff_code']; ?></td>
			<td><?php echo $staff['main-email']; ?></td>
			<td><?php echo $staff['sub_email']; ?></td>
			<td><?php echo $staff['enable']; ?></td>
			<td><?php echo $staff['created']; ?></td>
			<td><?php echo $staff['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staffs', 'action' => 'view', $staff['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staffs', 'action' => 'edit', $staff['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staffs', 'action' => 'delete', $staff['id']), array(), __('Are you sure you want to delete # %s?', $staff['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
