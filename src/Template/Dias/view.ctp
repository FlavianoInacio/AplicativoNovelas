<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dia'), ['action' => 'edit', $dia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dia'), ['action' => 'delete', $dia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capitulos'), ['controller' => 'Capitulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitulo'), ['controller' => 'Capitulos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dias view large-9 medium-8 columns content">
    <h3><?= h($dia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($dia->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dia->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Capitulos') ?></h4>
        <?php if (!empty($dia->capitulos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Resumo') ?></th>
                <th><?= __('Novela Id') ?></th>
                <th><?= __('Dia Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dia->capitulos as $capitulos): ?>
            <tr>
                <td><?= h($capitulos->id) ?></td>
                <td><?= h($capitulos->resumo) ?></td>
                <td><?= h($capitulos->novela_id) ?></td>
                <td><?= h($capitulos->dia_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Capitulos', 'action' => 'view', $capitulos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Capitulos', 'action' => 'edit', $capitulos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Capitulos', 'action' => 'delete', $capitulos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $capitulos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
