<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Endereco'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cidade'), ['controller' => 'Cidade', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidade', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lugar'), ['controller' => 'Lugar', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugar'), ['controller' => 'Lugar', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['controller' => 'Pessoa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoa', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="endereco view large-9 medium-8 columns content">
    <h3><?= h($endereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($endereco->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $endereco->has('cidade') ? $this->Html->link($endereco->cidade->id, ['controller' => 'Cidade', 'action' => 'view', $endereco->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($endereco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($endereco->numero) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lugar') ?></h4>
        <?php if (!empty($endereco->lugar)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Lugar Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col"><?= __('Endereco Id') ?></th>
                <th scope="col"><?= __('Site') ?></th>
                <th scope="col"><?= __('Telefone 1') ?></th>
                <th scope="col"><?= __('Telefone 2') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Instagram') ?></th>
                <th scope="col"><?= __('Whatsapp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($endereco->lugar as $lugar): ?>
            <tr>
                <td><?= h($lugar->id) ?></td>
                <td><?= h($lugar->tipo_lugar_id) ?></td>
                <td><?= h($lugar->nome) ?></td>
                <td><?= h($lugar->tipo_id) ?></td>
                <td><?= h($lugar->endereco_id) ?></td>
                <td><?= h($lugar->site) ?></td>
                <td><?= h($lugar->telefone_1) ?></td>
                <td><?= h($lugar->telefone_2) ?></td>
                <td><?= h($lugar->facebook) ?></td>
                <td><?= h($lugar->instagram) ?></td>
                <td><?= h($lugar->whatsapp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lugar', 'action' => 'view', $lugar->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lugar', 'action' => 'edit', $lugar->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lugar', 'action' => 'delete', $lugar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lugar->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pessoa') ?></h4>
        <?php if (!empty($endereco->pessoa)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Cnpj Cpf') ?></th>
                <th scope="col"><?= __('Endereco Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefone 1') ?></th>
                <th scope="col"><?= __('Telefone 2') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($endereco->pessoa as $pessoa): ?>
            <tr>
                <td><?= h($pessoa->id) ?></td>
                <td><?= h($pessoa->nome) ?></td>
                <td><?= h($pessoa->cnpj_cpf) ?></td>
                <td><?= h($pessoa->endereco_id) ?></td>
                <td><?= h($pessoa->email) ?></td>
                <td><?= h($pessoa->telefone_1) ?></td>
                <td><?= h($pessoa->telefone_2) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pessoa', 'action' => 'view', $pessoa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pessoa', 'action' => 'edit', $pessoa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pessoa', 'action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
