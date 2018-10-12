<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfAccount $typeOfAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Type Of Accounts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeOfAccounts form large-9 medium-8 columns content">
    <?= $this->Form->create($typeOfAccount) ?>
    <fieldset>
        <legend><?= __('Add Type Of Account') ?></legend>
        <?php
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
