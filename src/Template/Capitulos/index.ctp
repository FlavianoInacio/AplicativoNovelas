<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Capitulo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Novelas'), ['controller' => 'Novelas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Novela'), ['controller' => 'Novelas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dias'), ['controller' => 'Dias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dia'), ['controller' => 'Dias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="capitulos index large-9 medium-8 columns content">
    <h3><?= __('Capitulos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('novela_id') ?></th>
                <th><?= $this->Paginator->sort('dia_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($capitulos as $capitulo): ?>
            <tr>
                <td><?= $this->Number->format($capitulo->id) ?></td>
                <td><?= $capitulo->has('novela') ? $this->Html->link($capitulo->novela->id, ['controller' => 'Novelas', 'action' => 'view', $capitulo->novela->id]) : '' ?></td>
                <td><?= $capitulo->has('dia') ? $this->Html->link($capitulo->dia->id, ['controller' => 'Dias', 'action' => 'view', $capitulo->dia->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $capitulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $capitulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $capitulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitulo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
