<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserGroup $userGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tgroups'), ['controller' => 'Tgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tgroup'), ['controller' => 'Tgroups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($userGroup) ?>
    <fieldset>
        <legend><?= __('Add User Group') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('group_id', ['options' => $tgroups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
