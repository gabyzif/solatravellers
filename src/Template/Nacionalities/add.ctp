<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nacionality $nacionality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nacionalities'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nacionalities form large-9 medium-8 columns content">
    <?= $this->Form->create($nacionality) ?>
    <fieldset>
        <legend><?= __('Add Nacionality') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
