<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Conversations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tgroups'), ['controller' => 'Tgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tgroup'), ['controller' => 'Tgroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conversations form large-9 medium-8 columns content">
    <?= $this->Form->create($conversation) ?>
    <fieldset>
        <legend><?= __('Add Conversation') ?></legend>
        <?php
            echo $this->Form->control('Description');
            echo $this->Form->control('Date', ['empty' => true]);
            echo $this->Form->control('photo_id', ['options' => $photos]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('Title');
            echo $this->Form->control('LongDescription');
            echo $this->Form->control('tgroup_id', ['options' => $tgroups, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
