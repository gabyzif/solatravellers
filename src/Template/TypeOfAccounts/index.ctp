<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfAccount[]|\Cake\Collection\CollectionInterface $typeOfAccounts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type Of Account'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeOfAccounts index large-9 medium-8 columns content">
    <h3><?= __('Type Of Accounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeOfAccounts as $typeOfAccount): ?>
            <tr>
                <td><?= $this->Number->format($typeOfAccount->id) ?></td>
                <td><?= h($typeOfAccount->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeOfAccount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeOfAccount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeOfAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeOfAccount->id)]) ?>
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
