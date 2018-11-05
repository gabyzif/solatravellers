<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup $tgroup
 */
?>

<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($tgroup) ?>
    <fieldset>
        <legend><?= __('Add Group') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),array('class'=>'button expanded light-pink')) ?>
    <?= $this->Form->end() ?>
</div>
