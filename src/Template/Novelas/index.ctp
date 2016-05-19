<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Novela'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Capitulos'), ['controller' => 'Capitulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitulo'), ['controller' => 'Capitulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="novelas index large-9 medium-8 columns content">
    <h3><?= __('Novelas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('ativo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($novelas as $novela): ?>
            <tr>
                <td><?= $this->Number->format($novela->id) ?></td>
                <td><?= h($novela->titulo) ?></td>
                <td><?= h($novela->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $novela->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $novela->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $novela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $novela->id)]) ?>
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
