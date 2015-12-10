<!-- File: src/Template/Articles/index.ctp (delete links added) -->

<h1>Welcome Conestoga Pizzeria Staff!!!</h1>
<p><?= $this->Html->link('Add Order', ['action' => 'add']) ?></p>
<table>
    <tr>
		
        <th>OrderId</th>
        <th>Name</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>