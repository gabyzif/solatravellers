<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserGroup $userGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Group'), ['action' => 'edit', $userGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Group'), ['action' => 'delete', $userGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tgroups'), ['controller' => 'Tgroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tgroup'), ['controller' => 'Tgroups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userGroups view large-9 medium-8 columns content">
    <h3><?= h($userGroup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userGroup->has('user') ? $this->Html->link($userGroup->user->name, ['controller' => 'Users', 'action' => 'view', $userGroup->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tgroup') ?></th>
            <td><?= $userGroup->has('tgroup') ? $this->Html->link($userGroup->tgroup->name, ['controller' => 'Tgroups', 'action' => 'view', $userGroup->tgroup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userGroup->id) ?></td>
        </tr>
    </table>
</div>
