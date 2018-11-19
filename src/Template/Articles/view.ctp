<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>




<div class="responsive-blog-post">
    <div class="individual-post">
        <h2><?=h($article->title)?></h2>
        <p class="date"><?= h($article->created) ?></p>
        <?php if($User->type_of_account_id == 5) {?>

        <nav class="nav-article">
            <ul class="menu">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
                <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
            </ul>
        </nav>
        <?php } ?>

        <?php foreach($article->photos as $imagen): ?>
            <img src="/images/Photos/url/<?= $imagen->url?>">
        <?php endforeach; ?>
        <p> <?= $this->Text->autoParagraph(h($article->body)); ?></p>
        <!--<a class="button large small" href="#">Comment</a>-->

    </div>


</div>
