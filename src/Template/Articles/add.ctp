<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var $photos

 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article,['type'=> 'file']); ?>


    <form>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">

                <div class="medium-6 cell">
                    <?= $this->Form->control('title',
                        ['class' => 'form-control']) ?>

                </div>
                <div class="medium-6 cell">
                    <?= $this->Form->control('description',
                        ['class' => 'form-control']) ?>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <?= $this->Form->control('body',
                        ['class' => 'form-control']) ?>
                </div>

                <!--Eso es porque en un articulo puede haber muchas fotos, esa es la relación, por eso va entre corchetes, eso te permite replicar ese bloque de código y guardar varias fotos al mismo tiempo así
-->
                <div class="medium-6 cell">
                    <?= $this->Form->control('photos[].url',
                        ['type' => 'file'],
                        ['class' => 'form-control']) ?>
                </div>
                <div class="medium-6 cell">
                    <?= $this->Form->control('photos[].url',
                        ['type' => 'file'],
                        ['class' => 'form-control']) ?>
                </div>
                <div class="medium-6 cell">
                    <?= $this->Form->control('photos[].url',
                        ['type' => 'file'],
                        ['class' => 'form-control']) ?>
                </div>


            </div>

            <?= $this->Form->hidden('photos.article_id', ['value' => $article->id]) ?>
            <?= $this->Form->button('Submit', ['class' => 'btn btn-success'])?>
            <?= $this->Form->end(); ?>
        </div>



</div>
</form>


