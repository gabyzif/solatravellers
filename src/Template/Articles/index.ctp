<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>

<?php if($User->type_of_account_id == 5) {?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<?php }?>





    <h3><?= __('Blog') ?></h3>
    <div class="responsive-blog-post">


            <?php foreach ($articles as $article): ?>
                <div class="individual-post">
                    <h2><?= $article->title ?></h2>
                    <p class="date"><?= $article->created ?></p>
                    <?php if(isset($article->photos[0])): ?>
                        <img src="/images/Photos/url/<?= $article->photos[0]->url ?>">
                    <?php else: ?>
                        <img src="https://placehold.it/1200x650">
                    <?php endif; ?>
                    <p><?= $article->description ?></p>
                    <a class="button large" href="<?= $this->Url->build(['action' => 'view', $article->id ]) ?>">Read On</a>
                </div>


            <?php endforeach; ?>

        <div class="paginator">
            <ul class="pagination text-center">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ["class"=>"pagination text-center"]) ?></p>
        </div>

    </div>


