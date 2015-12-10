<!-- File: src/Template/Articles/viewOrder.ctp -->
<div  id="whole" class="container">
    <h1>Conestoga Pizzeria</h1>
	       
<div class="row" style="text-align:center">
    <h1> Order  - <?= $order->status ?> </h1>
    <h1><?= h($order->name) ?></h1>
    <h5> Phone : <?= $order->phone ?> --- Email : <?= $order->email ?></h5>
    <h3><?= h($order->address) ?> <?= h($order->city) ?> <?= h($order->province) ?> <?= h($order->postalCode) ?></h3>
    <h3>Pizza Size : <?= $order->size ?></h3>
    <h3>Crust Type: <?= $order->crust ?></h3>
    <h3>Toppings: <?= $order->toppings ?></h3>
</div>
</div>