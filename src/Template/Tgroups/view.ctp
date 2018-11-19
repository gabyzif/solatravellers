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
                        <?php if($User->type_of_account_id == 5){ ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tgroup->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tgroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tgroup->id)]) ?>
                        <?php } ?>
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

        </div>
    </div>
</div>
