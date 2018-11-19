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

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My conversations
            </h6>
        </div>
        <?php if($is_empty_conv){?>
            <p class="p-hid">You aren't join in any conversation yet!</p>


        <?php } else{

            foreach ($my_conversations as $my_conv):?>
                <div class="row section-div" >
                    <div class=" small-12 medium-6 columns info-div">
                        <div class="name-info">
                            <a class="div-name">

                              <?php  $my_conv->description ?>

                            </a>

                        </div>
                    </div>

                </div>
            <?php endforeach; } ?>

    </div>

</div>
<div class="cell medium-6 large-8 ">
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

                    <div class="name-info">
                        <a class="div-name" href="<?= $this->Url->build(['action' => '/view', $conv->Id ])?>">
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
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>

    </div>
</div>