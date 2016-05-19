<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Novela'), ['action' => 'edit', $novela->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Novela'), ['action' => 'delete', $novela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $novela->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Novelas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Novela'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Capitulos'), ['controller' => 'Capitulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Capitulo'), ['controller' => 'Capitulos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="novelas view large-9 medium-8 columns content">
    <h3><?= h($novela->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($novela->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($novela->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $novela->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Capitulos') ?></h4>
        <?php if (!empty($novela->capitulos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Resumo') ?></th>
                <th><?= __('Novela Id') ?></th>
                <th><?= __('Dia Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($novela->capitulos as $capitulos): ?>
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
