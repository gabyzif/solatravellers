<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserGroup[]|\Cake\Collection\CollectionInterface $userGroups
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Group'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tgroups'), ['controller' => 'Tgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tgroup'), ['controller' => 'Tgroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userGroups index large-9 medium-8 columns content">
    <h3><?= __('User Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userGroups as $userGroup): ?>
            <tr>
                <td><?= $this->Number->format($userGroup->id) ?></td>
                <td><?= $userGroup->has('user') ? $this->Html->link($userGroup->user->name, ['controller' => 'Users', 'action' => 'view', $userGroup->user->id]) : '' ?></td>
                <td><?= $userGroup->has('tgroup') ? $this->Html->link($userGroup->tgroup->name, ['controller' => 'Tgroups', 'action' => 'view', $userGroup->tgroup->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userGroup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userGroup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userGroup->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
