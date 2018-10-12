<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<!--left-->
<div class="cell medium-6 large-8 ">
    <div class="big-div left-div">

        <div class="row section-div" >
            <div class="small-12 medium-6 columns info-div">
                <div class="article-row-section">
                    <div class="article-row-section-inner">
                        <h2><?= h($publication->Title) ?></h2>
                        <a href="#">
                            <article class="article-row">
                                <div class="article-row-content">

                                    <p class="article-row-content-description"><?= h($publication->LongDescription) ?></p>

                                    <p class="article-row-content-author"><?= $publication->has('user') ? $this->Html->link($publication->user->name, ['controller' => 'Users', 'action' => 'view', $publication->user->id]) : '' ?></p>
                                    <time class="article-row-content-time" datetime="2008-02-14 20:00"><?= h($publication->Date) ?></time>
                                </div>
                            </article>

                            <!---foreach comentarios -->
                            <article class="article-row">
                                <div class="article-row-content">
                                    <p class="article-row-content-description"><?=h($publication->LongDescription)?></p>

                                    <p class="article-row-content-author">By Yeti</p>
                                    <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>
                                </div>
                            </article>
                        </a>

                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- RIGHT -->

<div class="cell medium-6 large-4">
    <div class="big-div right-div btn">
        <button class="button expanded light-pink ">Join group</button>
        <p class="text-center">Only members of the group can post content</p>

    </div>

    <div class="big-div right-div">
        <div class="div-header">
            <h6 class="header-title">
                Members
            </h6>
        </div>
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <td><?= $publication->has('user') ? $this->Html->link($publication->user->name, ['controller' => 'Users', 'action' => 'view', $publication->user->id]) : '' ?></td>

                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                    <img class="avatar-small" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">

                </div>

            </div>

        </div>


    </div>

</div>

<div class="publications view large-9 medium-8 columns content">
    <h3><?= h($publication->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($publication->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= $publication->has('photo') ? $this->Html->link($publication->photo->id, ['controller' => 'Photos', 'action' => 'view', $publication->photo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Of Publication') ?></th>
            <td><?= $publication->has('type_of_publication') ? $this->Html->link($publication->type_of_publication->id, ['controller' => 'TypeOfPublications', 'action' => 'view', $publication->type_of_publication->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $publication->has('user') ? $this->Html->link($publication->user->name, ['controller' => 'Users', 'action' => 'view', $publication->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $publication->has('category') ? $this->Html->link($publication->category->id, ['controller' => 'Categories', 'action' => 'view', $publication->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($publication->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LongDescription') ?></th>
            <td><?= h($publication->LongDescription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tgroup') ?></th>
            <td><?= $publication->has('tgroup') ? $this->Html->link($publication->tgroup->name, ['controller' => 'Tgroups', 'action' => 'view', $publication->tgroup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publication->Id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($publication->Date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($publication->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Publication Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($publication->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->description) ?></td>
                <td><?= h($comments->publication_id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
