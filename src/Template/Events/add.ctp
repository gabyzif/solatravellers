
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup $tgroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
        echo $this->Form->control('description');
        echo $this->Form->control('long_description');
        echo  $this->Form->control('photos[].url',
            ['type' => 'file'],
            ['class' => 'form-control']);
        echo $this->Form->control('name');
        echo $this->Form->control('date');
      //  echo $this->Form->control('users._ids', ['options' => $users]);
        ?>


    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
