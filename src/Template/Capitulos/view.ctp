<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Capitulo'), ['action' => 'edit', $capitulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Capitulo'), ['action' => 'delete', $capitulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Capitulos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitulo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Novelas'), ['controller' => 'Novelas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Novela'), ['controller' => 'Novelas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dias'), ['controller' => 'Dias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dia'), ['controller' => 'Dias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="capitulos view large-9 medium-8 columns content">
    <h3><?= h($capitulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Novela') ?></th>
            <td><?= $capitulo->has('novela') ? $this->Html->link($capitulo->novela->id, ['controller' => 'Novelas', 'action' => 'view', $capitulo->novela->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Dia') ?></th>
            <td><?= $capitulo->has('dia') ? $this->Html->link($capitulo->dia->id, ['controller' => 'Dias', 'action' => 'view', $capitulo->dia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($capitulo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resumo') ?></h4>
        <?= $this->Text->autoParagraph(h($capitulo->resumo)); ?>
    </div>
</div>
