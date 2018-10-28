<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Publications'), ['action' => 'index']) ?></li>
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
<div class="publications form large-9 medium-8 columns content">
    <?= $this->Form->create($publication) ?>
    <fieldset>
        <legend><?= __('Add Publication') ?></legend>
        <?php
        echo $this->Form->control('Description');
        echo $this->Form->control('Date', ['empty' => true]);
        echo $this->Form->hidden('type_of_publication_id', ['value' => 2]);
        echo $this->Form->hidden('id_user', ['value' => $id_user]);
        echo $this->Form->hidden('category_id', ['value' => 1]);
        echo $this->Form->control('Title');
        echo $this->Form->control('LongDescription');
        echo $this->Form->control('tgroup_id', ['options' => $tgroups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
