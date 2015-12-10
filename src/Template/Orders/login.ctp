<!-- File: src/Template/Articles/staffLogin.ctp -->
<div  id="whole" class="container">
    <h1>Conestoga Pizzeria</h1>
	      
<div class="row" style="margin-left:40%">
    <? echo $this->Form->create('Staff Login'); ?>
    <div id="login" class="col-md-6">
        <?
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </div>
</div>
</br>
<div class="submit">

<?php
    echo $this->Form->button(__('Login In'), array('class'=>'order_btn'));
    echo $this->Form->end();
?>
</br>
<?= $this->Html->link('Home', ['action' => 'home1']) ?>

</div>
</div>