<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nacionality $nacionality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nacionality'), ['action' => 'edit', $nacionality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nacionality'), ['action' => 'delete', $nacionality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nacionality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nacionalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nacionality'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nacionalities view large-9 medium-8 columns content">
    <h3><?= h($nacionality->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($nacionality->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($nacionality->id) ?></td>
        </tr>
    </table>
</div>
