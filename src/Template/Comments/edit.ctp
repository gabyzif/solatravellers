<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
</nav>
<div class="comments form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Edit Comment') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->hidden('conversation_id', ['value' => $comment->id]);
            echo $this->Form->hidden('user_id', ['value' => $User->id]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
