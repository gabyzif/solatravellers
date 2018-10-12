<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup[]|\Cake\Collection\CollectionInterface $tgroups
 */
?>
<div class="cell medium-6 large-4">
    <div class="big-div left-div btn">
        <button class="button expanded light-pink ">New group</button>
    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My groups
            </h6>
        </div>
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>
                <div class="name-info">
                    <a class="div-name">
                        Group name
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Members
                    </p>
                    <p class="div-more-info">
                        Posts
                    </p>
                </div>
            </div>

        </div>
        <div class="view-more">
            <p class="view-more-text">
                <a href="#" class="view-more-link">View More..</a>
            </p>
        </div>

    </div>

    <div class="big-div left-div btn">
        <button class="button expanded light-pink ">New Converesation</button>
    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My conversations
            </h6>
        </div>
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

        <?php $count=0;

        foreach ($tgroups as $tgroup):
            ?>

        <div class="row section-div" >
            <div class="small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <??>
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>

                <div class="name-info">

                    <a class="div-name">

                        <?= h($tgroup->name) ?>
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true">
                            <?= h($tgroup->user_groups[$count]->user_id) ?>

                        </i>
                        Members
                    </p>
                    <p class="div-more-info">

                        Posts
                    </p>
                </div>
            </div>

        </div>
        <?php
            $count=$count+1;

        endforeach; ?>

        <div class="view-more">
            <p class="view-more-text">
                <a href="#" class="view-more-link">View More..</a>
            </p>
        </div>
    </div>
    <div class="big-div right-div">
        <div class="div-header">
            <h6 class="header-title">
                Popular conversations
            </h6>
        </div>
        <div class="row section-div" >
            <div class="small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="https://i.imgur.com/UPVxPjb.jpg" alt="Kishore Kumar">
                </div>
                <div class="name-info">
                    <a class="div-name">
                        Conversation name
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Members
                    </p>

                </div>
            </div>

        </div>
        <div class="view-more">
            <p class="view-more-text">
                <a href="#" class="view-more-link">View More..</a>
            </p>
        </div>
    </div>
</div>