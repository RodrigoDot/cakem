<h3>LOGIN</h3>

<?php 

echo $this->Form->create();
echo $this->Form->control('username');
echo $this->Form->control('password');
echo $this->Form->submit('send');
echo $this->Form->end();


