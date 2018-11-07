<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tgroup[]|\Cake\Collection\CollectionInterface $tgroups
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 *
 *

 */
?>
<div class="grid-x" id="main">
    <!--left-->
    <div class="cell medium-6 large-4">
        <div class="big-div left-div btn">
            <?php if(!$is_in_group){?>
            <?= $this->Form->create($userGroup, ['url' => 'tgroups/joinGroup']) ?>

                <?php
                echo $this->Form->hidden('group_id', ['value' => $tgroup->id]);
                ?>
            <?= $this->Form->button(__('Join Group'),array('class'=>'button expanded light-pink')) ?>
            <?= $this->Form->end() ?>


                <p>Join the group to start a new conversation</p>
            <?php }else{
                echo "<p>Welcome to the $tgroup->name group</p>";
            } ?>

        </div>

        <div class="big-div left-div">
            <div class="div-header">
                <h6 class="header-title">
                    Members
                </h6>
            </div>
            <div class="row section-div" >
                <div class=" small-12 medium-6 columns info-div">
                    <div class="info-avatar">
                        <?php foreach($users_group as $userG):?>
                        <img class="avatar-small"  src="/images/Photos/url/<?= h($userG->user->photo_url) ?>" alt="">
                       <?php endforeach?>

                    </div>

                </div>

            </div>


        </div>

    </div>
    <!-- RIGHT -->
    <div class="cell medium-6 large-8 ">
        <div class="big-div right-div">

            <div class="row section-div" >
                <div class="small-12 medium-6 columns info-div">
                    <div class="info-avatar">
                        <img class="avatar" src="/images/Photos/url/<?= h($tgroup->photo->url) ?>" alt=" <?= h($tgroup->name) ?>">

                    </div>
                    <div class="name-info">
                        <h4 class="div-name">


                            <?= h($tgroup->name) ?>


                        </h4>
                        <p class="div-info">
                            <?= h($tgroup->description) ?>

                        </p>
                        <p class="div-more-info">
                            <?= h($cant_users)?> members
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="big-div right-div">
            <div class="div-header">
                <h6 class="header-title" id="ht">
                    Conversations

                    <?php if(!$is_in_group){?>
                    <p>Join the group to start a new conversation</p>

                    <?php }else{
                        echo "<p></p>";
                    } ?>

                </h6>
            </div>
            <div class="row section-div" >
                <?php foreach ($conversations as $conv):
                    ?>
                    <div class="row section-div" >
                        <div class="small-12 medium-6 columns info-div">

                            <div class="name-info">
                                <a class="div-name" href="<?= $this->Url->build(['action' => '../conversations/view', $conv->Id ])?>">
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
                <nav id="pagination" aria-label="Pagination">
                    <ul class="pagination text-center">
                        <li class="pagination-previous disabled">Previous</li>
                        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                        <li><a href="#" aria-label="Page 2">2</a></li>
                        <li><a href="#" aria-label="Page 3">3</a></li>
                        <li><a href="#" aria-label="Page 4">4</a></li>
                        <li class="ellipsis"></li>
                        <li><a href="#" aria-label="Page 12">12</a></li>
                        <li><a href="#" aria-label="Page 13">13</a></li>
                        <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
