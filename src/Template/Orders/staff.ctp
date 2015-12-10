<!-- File: src/Template/Articles/staff.ctp -->
<div  id="whole" class="container">
    <h1>Conestoga Pizzeria</h1>
	        
<div class="row">
    <?= $this->Html->link('Logout', ['action' => 'staffLogin']) ?>
    <h1> Orders </h1>
    <table>
        <tr>
            <th>Customer Id</th>
            <th>Status</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>View Order</th>
            <th>Cancel</th>
            <th>Complete</th>
        </tr>

            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order->id ?></td>
                <td><?= $order->status ?></td>
                <td>
                    <?= $this->Html->link($order->name, ['action' => 'viewOrder', $order->id]) ?>       
                </td>
                <td>
                    <?= h($order->address) ?> <?= h($order->city) ?> <?= h($order->postalCode) ?>
                </td>
                <td>
                    <?= $this->Html->link('View', ['action' => 'viewOrder', $order->id]) ?>       
                </td>
                <td>
                    <?= $this->Form->postLink(
                        'Delete',
                        ['action' => 'delete', $order->id],
                        ['confirm' => 'Are you sure?'])
                    ?>
                </td>
                <td>
                    <?= $this->Form->postLink(
                        'Complete',
                        ['action' => 'complete', $order->id])
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div class="submit">
            <?= $this->Html->link('Logout', ['action' => 'staffLogin']) ?>
        </div>
</div>