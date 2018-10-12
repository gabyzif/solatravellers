<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfAccount $typeOfAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Of Account'), ['action' => 'edit', $typeOfAccount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Of Account'), ['action' => 'delete', $typeOfAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeOfAccount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Of Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Of Account'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeOfAccounts view large-9 medium-8 columns content">
    <h3><?= h($typeOfAccount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($typeOfAccount->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeOfAccount->id) ?></td>
        </tr>
    </table>
</div>
