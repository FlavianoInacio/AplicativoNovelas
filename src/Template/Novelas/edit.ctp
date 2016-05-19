<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $novela->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $novela->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Novelas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Capitulos'), ['controller' => 'Capitulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitulo'), ['controller' => 'Capitulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="novelas form large-9 medium-8 columns content">
    <?= $this->Form->create($novela) ?>
    <fieldset>
        <legend><?= __('Edit Novela') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
