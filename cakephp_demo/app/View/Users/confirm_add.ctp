<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Confirm User'); ?></legend>
	<?php		
		echo "<table>
          <tr>
            <td>username</td>
            <td>".$data['User']['username']."</td>
          </tr>
          <tr>
            <td>password</td>
            <td>*******</td>
          </tr>
          <tr>
            <td>email</td>
            <td>".$data['User']['email']."</td>
          </tr>
          <tr>
            <td>phone</td>
            <td>".$data['User']['phone']."</td>
          </tr>
          <tr>
            <td>pin</td>
            <td>".$data['User']['pin']."</td>
          </tr>
         </table> ";
	?>
	</fieldset>
	<div class="btn_group">
      <input type="button" name="back" value="Back" class="btn_view js_submit_form" data="/users/confirm_add" />
      <input type="submit" name="regist" value="Regist" class="btn_view" />
      </div>
<?php echo $this->Form->end(__('Submit')); ?>