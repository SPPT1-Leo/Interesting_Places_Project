<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Uf[]|\Cake\Collection\CollectionInterface $uf
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Uf'), ['controller' => 'Uf', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uf'), ['controller' => 'Uf', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?></li>
    </ul>
</nav>