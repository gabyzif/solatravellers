<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup $tgroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tgroup'), ['action' => 'edit', $tgroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tgroup'), ['action' => 'delete', $tgroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tgroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tgroups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tgroup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tgroups view large-9 medium-8 columns content">
    <h3><?= h($tgroup->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tgroup->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($tgroup->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tgroup->id) ?></td>
        </tr>
    </table>
</div>
