<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfPublication $typeOfPublication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Of Publication'), ['action' => 'edit', $typeOfPublication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Of Publication'), ['action' => 'delete', $typeOfPublication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeOfPublication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Of Publications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Of Publication'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publications'), ['controller' => 'Publications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publication'), ['controller' => 'Publications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeOfPublications view large-9 medium-8 columns content">
    <h3><?= h($typeOfPublication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($typeOfPublication->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeOfPublication->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Publications') ?></h4>
        <?php if (!empty($typeOfPublication->publications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Photo Id') ?></th>
                <th scope="col"><?= __('Type Of Publication Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('LongDescription') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeOfPublication->publications as $publications): ?>
            <tr>
                <td><?= h($publications->Id) ?></td>
                <td><?= h($publications->Description) ?></td>
                <td><?= h($publications->Date) ?></td>
                <td><?= h($publications->photo_id) ?></td>
                <td><?= h($publications->type_of_publication_id) ?></td>
                <td><?= h($publications->user_id) ?></td>
                <td><?= h($publications->category_id) ?></td>
                <td><?= h($publications->Title) ?></td>
                <td><?= h($publications->LongDescription) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publications', 'action' => 'view', $publications->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publications', 'action' => 'edit', $publications->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publications', 'action' => 'delete', $publications->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $publications->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
