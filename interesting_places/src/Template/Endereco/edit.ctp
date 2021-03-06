<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $endereco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lugar'), ['controller' => 'Lugar', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugar'), ['controller' => 'Lugar', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="endereco form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Edit Endereco') ?></legend>
        <?php
            echo $this->Form->control('logradouro');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('cidade_id', ['options' => $cidade]);
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
