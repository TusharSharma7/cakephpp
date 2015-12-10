<!-- ORDER FORM --!>

<div  id="whole" class="container">
<h1> Conestoga Pizzeria </h1>
<h2> Personal Details Of Customer</h2>
<div  id="pLeft" class="col-sm-6">
<?php
    echo $this->Form->create($order);
    echo $this->Form->input('Name');
    echo $this->Form->input('Address', ['rows' => '2']);
	echo $this->Form->input('City');
    echo $this->Form->input('Province', array('options' => array('Ontario','Quebec','Saskatchewan','Alberta')));
	echo $this->Form->input('PostalCode');
	echo $this->Form->input('Mobile');
	echo $this->Form->input('Email');
?>
</div>
<div  id="pRight" class="col-sm-6">
<?php
	echo $this->Form->input('Pizza Size', array('options' => array('Small','Medium','Large','X-Large')));
	echo $this->Form->input('Crust Types', array('options' => array('Hand-tossed','Pan','Stuffed','Thin')));
	echo $this->Form->input('toppings1', array('label' => 'Toppings','type' => 'select','multiple' => 'checkbox','options' => array('Pepperoni '=>'Pepperoni','Sausage'=>'Sausage','Greenpeppers'=>'Greenpeppers','Onions'=>'Onions','Mushrooms'=>'Mushrooms','Olives'=>'Olives','Pinapple'=>'Pinapple','Jalapeno'=>'Jalapeno')));
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
</div>
<div class="submit">
<?php
    echo $this->Form->button(__('Submit Order'), array('class'=>'order_btn'));
    echo $this->Form->end();
?>

</div>
<div class="submit">
		<?= $this->Html->link('Staff Login', ['action' => 'stafflogin']) ?>
</div>
</div>