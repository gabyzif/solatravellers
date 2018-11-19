<div class="grid-x" id="main">
    <!--left-->
    <div class="cell medium-6 large-8 ">
        <div class="big-div left-div">

            <div class="row section-div" >
                <div class="small-12 medium-6 columns info-div">
                    <div class="article-row-section">
                        <div class="article-row-section-inner">

                            <nav class="large-3 medium-4 columns" id="actions-sidebar">
                                <?php if($User->type_of_account_id == 5) {?>
                                <ul class="side-nav">
                                    <li class="heading"><?= __('Actions') ?></li>
                                    <li><?= $this->Html->link(__('List Comments'), ['action' => '../comments/index']) ?> </li>
                                </ul>
                                <?php } ?>
                            </nav>

                            <article class="article-row">
                                    <div class="article-row-content">
                                        <h3 class="article-row-content-header"><?php echo $conversation->Description?></h3>

                                        <p class="article-row-content-description"><?php echo $conversation->LongDescription?></p>

                                        <p class="article-row-content-author">By <?php echo $conversation->user->name?></p>
                                        <time class="article-row-content-time" datetime="2008-02-14 20:00"><?php echo $conversation->Date?></time>
                                    </div>
                                </article>

                            <?php foreach ($comments as $comment):?>

                                <article class="article-row">
                                    <div class="article-row-content">
                                        <p class="article-row-content-description"><?php echo $comment->description ?>.</p>
                                        <p><?= $this->Html->link(__('| edit |'), ['action' => '../comments/edit', $comment->id]) ?> <?= $this->Html->link(__('| delete |'), ['action' => '../comments/delete', $comment->id]) ?> </p>

                                        <p class="article-row-content-author">By <?php echo $comment->user->name ?></p>
                                        <time class="article-row-content-time" datetime="2008-02-14 20:00"><?php echo $comment->date ?></time>
                                    </div>
                                </article>

                            <?php endforeach?>



                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div class="comments form large-9 medium-8 columns content">
            <?= $this->Form->create($comment,  ['url' => 'conversations/addComment']) ?>
                <?php
                echo $this->Form->control('description',['value' => '']);
                echo $this->Form->hidden('conversation_id', ['value' => $id]);
                echo $this->Form->hidden('user_id', ['value' => $User->id]);
                ?>

            <?= $this->Form->button(__('Submit'),array('class'=>'button expanded light-pink')) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
    <!-- RIGHT -->

    <div class="cell medium-6 large-4">

        <div class="big-div right-div">
            <div class="div-header">
                <h6 class="header-title">
                    Members
                </h6>
            </div>
            <div class="row section-div" >
                <div class=" small-12 medium-6 columns info-div">
                    <div class="info-avatar">
                        <?php foreach($conversations as $conv):?>
                            <img class="avatar-small"  src="/images/Photos/url/<?= h($conv->user->photo_url) ?>" alt="<?= h($conv->user->name) ?>">
                       <?php endforeach;?>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>
