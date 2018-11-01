<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup[]|\Cake\Collection\CollectionInterface $tgroups
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 *
 *

 */
?>
<div class="cell medium-6 large-4">
    <div class="big-div left-div btn">
        <button class="button expanded light-pink "  onclick="window.location.href='<?= $this->Url->build(['action' => 'add' ]) ?>'">New group</button>
    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My groups
            </h6>
        </div>


        <div class="row section-div" >

            <?php if($is_empty){?>
            <p class="p-hid">You aren't join in any group yet!</p>


            <?php }

            foreach ($my_groups as $my_group):?>
            <div class=" small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>
                <div class="name-info">>
                    <a class="div-name"
                        <?php h($my_group->tgroup->name) ?>
                    </a>

                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php h($cant_users) ?>
                    </p>
                    <p class="div-more-info">
                        Posts
                    </p>
                </div>
            </div>
            <?php endforeach?>
        </div>

    </div>

    <div class="big-div left-div btn">
        <button class="button expanded light-pink " onclick="window.location.href='<?= $this->Url->build(['action' => 'newconv' ]) ?>'" >New Converesation</button>
    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My conversations
            </h6>
        </div>
        <?php if($is_empty_conv){?>
            <p class="p-hid">You aren't join in any conversation yet!</p>


        <?php }

        foreach ($my_conversations as $my_conv):?>
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>
                <div class="name-info">
                    <a class="div-name">
                        Conversation name
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Info
                    </p>

                </div>
            </div>

        </div>
        <?php endforeach?>

        <div class="view-more">
            <p class="view-more-text">
                <a href="#" class="view-more-link">View More..</a>
            </p>
        </div>

    </div>

</div>
<div class="cell medium-6 large-8 ">
    <div class="big-div right-div">
        <div class="div-header">
            <h6 class="header-title">
                Popular groups
            </h6>
        </div>

        <?php

        foreach ($tgroups as $tgroup):
            ?>

        <div class="row section-div" >
            <div class="small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <??>
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>

                <div class="name-info">

                    <a class="div-name"  href="<?= $this->Url->build(['action' => 'view', $tgroup->id ])?>">

                        <?= h($tgroup->name);

                        $this->Html->link(__('View'), ['action' => 'view', $tgroup->id])


                        ?>
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true">
                            <?= h($cant_users[$tgroup->id]) ?>

                        </i>
                        Members
                    </p>
                    <p class="div-more-info">
                        <?= h($cant_posts[$tgroup->id]) ?>

                        Posts
                    </p>
                </div>
            </div>

        </div>
        <?php
        endforeach; ?>

    </div>
    <div class="big-div right-div">
        <div class="div-header">
            <h6 class="header-title">
                Popular conversations
            </h6>
        </div>
        <?php foreach ($conversations as $conv):
        ?>
        <div class="row section-div" >
            <div class="small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>
                <div class="name-info">
                    <a class="div-name">
                        <?= h($conv->Title) ?>
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?= h($conv->Description) ?>

                    </p>

                </div>
            </div>

        </div>


     <?php endforeach; ?>
    </div>
</div>