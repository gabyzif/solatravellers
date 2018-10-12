<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication[]|\Cake\Collection\CollectionInterface $publications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publication'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type Of Publications'), ['controller' => 'TypeOfPublications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type Of Publication'), ['controller' => 'TypeOfPublications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tgroups'), ['controller' => 'Tgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tgroup'), ['controller' => 'Tgroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publications index large-9 medium-8 columns content">
    <h3><?= __('Publications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_of_publication_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LongDescription') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tgroup_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publications as $publication): ?>
            <tr>
                <td><?= $this->Number->format($publication->Id) ?></td>
                <td><?= h($publication->Description) ?></td>
                <td><?= h($publication->Date) ?></td>
                <td><?= $publication->has('photo') ? $this->Html->link($publication->photo->id, ['controller' => 'Photos', 'action' => 'view', $publication->photo->id]) : '' ?></td>
                <td><?= $publication->has('type_of_publication') ? $this->Html->link($publication->type_of_publication->id, ['controller' => 'TypeOfPublications', 'action' => 'view', $publication->type_of_publication->id]) : '' ?></td>
                <td><?= $publication->has('user') ? $this->Html->link($publication->user->name, ['controller' => 'Users', 'action' => 'view', $publication->user->id]) : '' ?></td>
                <td><?= $publication->has('category') ? $this->Html->link($publication->category->id, ['controller' => 'Categories', 'action' => 'view', $publication->category->id]) : '' ?></td>
                <td><?= h($publication->Title) ?></td>
                <td><?= h($publication->LongDescription) ?></td>
                <td><?= $publication->has('tgroup') ? $this->Html->link($publication->tgroup->name, ['controller' => 'Tgroups', 'action' => 'view', $publication->tgroup->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publication->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publication->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publication->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $publication->Id)]) ?>
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
