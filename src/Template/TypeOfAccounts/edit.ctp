<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOfAccount $typeOfAccount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeOfAccount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeOfAccount->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Type Of Accounts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeOfAccounts form large-9 medium-8 columns content">
    <?= $this->Form->create($typeOfAccount) ?>
    <fieldset>
        <legend><?= __('Edit Type Of Account') ?></legend>
        <?php
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
