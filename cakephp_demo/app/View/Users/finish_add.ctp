Finish regist account

<?php
if($this->Session->check('Auth.User')) :
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') );
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') );
else :
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') );
endif;
?>