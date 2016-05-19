<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Capitulos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Novelas'), ['controller' => 'Novelas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Novela'), ['controller' => 'Novelas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dias'), ['controller' => 'Dias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dia'), ['controller' => 'Dias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="capitulos form large-9 medium-8 columns content">
    <?= $this->Form->create($capitulo) ?>
    <fieldset>
        <legend><?= __('Add Capitulo') ?></legend>
        <?php
            echo $this->Form->input('resumo');
            echo $this->Form->input('novela_id', ['options' => $novelas]);
            echo $this->Form->input('dia_id', ['options' => $dias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
