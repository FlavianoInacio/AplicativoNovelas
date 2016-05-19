<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Capitulos'), ['controller' => 'Capitulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Capitulo'), ['controller' => 'Capitulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dias form large-9 medium-8 columns content">
    <?= $this->Form->create($dia) ?>
    <fieldset>
        <legend><?= __('Add Dia') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
