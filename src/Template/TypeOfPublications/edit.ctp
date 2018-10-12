<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfPublication $typeOfPublication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeOfPublication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeOfPublication->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Type Of Publications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Publications'), ['controller' => 'Publications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publication'), ['controller' => 'Publications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeOfPublications form large-9 medium-8 columns content">
    <?= $this->Form->create($typeOfPublication) ?>
    <fieldset>
        <legend><?= __('Edit Type Of Publication') ?></legend>
        <?php
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
