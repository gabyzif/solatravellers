<div class="cell medium-6 large-4">
    <div class="big-div left-div btn">
        <button class="button expanded light-pink "  onclick="window.location.href='<?= $this->Url->build(['action' => 'add' ]) ?>'">New Event</button>
    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                My Events
            </h6>
        </div>
        <div class="row section-div" >
            <?php if($is_empty){?>
                <p class="p-hid">You aren't join in any group yet!</p>
            <?php }

            foreach ($my_events as $my_event):?>
            <div class=" small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar"src="/images/Events/photo_url/<?= h($my_event->event->photo_url) ?>"  alt="<?php echo $my_event->event->name ?>">
                </div>
                <div class="name-info">
                    <a class="div-name">href="<?= $this->Url->build(['action' => 'view', $my_event->id ])?>" >
                        <?php echo $my_event->event->name ?>
                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo $my_event->event->date ?>
                    </p>

                </div>
            </div>
            <?php endforeach?>

        </div>

    </div>

    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                Search
            </h6>
        </div>
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns search-div">
                <?php



                echo $this->Form->create(null, ['type' => 'get', 'class'=>'animated-search-form', 'url'=>'../events/index']);
                // You'll need to populate $authors in the template from your controller
                echo $this->Form->control('city_id', ['class'=>'animated-search-form', "options"=>$citys]);
                // Match the search param in your table configuration
                //echo $this->Form->control('q'),(['class'=>'animated-search-form']);
                // echo $this->Form->control('date', ['type' => 'date' ,'dateFormat' => 'DMY',
                //'minYear' => date('Y') - 2,
                //'maxYear' => date('Y') + 2 ]);

                echo $this->Form->button('Filter' , ['type' => 'submit', 'class'=> "button expanded light-pink"]);
                echo $this->Html->link(' Reset', ['action' => 'index']);
                echo $this->Form->end();

                ?>
            </div>

        </div>

    </div>

</div>
<div class="cell medium-6 large-8 ">
    <div class="big-div right-div">
        <div class="div-header">
            <h6 class="header-title">
                Events
            </h6>

        </div>
        <div class="row section-div" >
            <?php foreach ($events as $event):?>

            <div class="small-12 medium-6 columns info-div">
                <div class="info-avatar">
                    <img class="avatar" src="/images/Events/photo_url/<?= h($event->photo_url) ?>"   alt="<?php echo $event->name?>">
                </div>
                <div class="name-info">
                    <a class="div-name"  href="<?= $this->Url->build(['action' => 'view', $event->id ])?>">

                        <?php echo $event->name?>

                    </a>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo $event->description?>
                    </p>
                    <p class="div-more-info">
                        <?php echo $cant_users[$event->id]?> Members
                    </p>
                    <p class="div-more-info">
                        <?php echo $event->city->name?>          </p>
                </div>
                <?php if($User->type_of_account_id == 5){ ?>
                    <?= $this->Html->link(__('| Edit |'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('| Delete |'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                <?php } ?>
            </div>
            <?php endforeach;?>

        </div>
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