
<div class="cell medium-6 large-4">

    <div class="big-div left-div btn">
        <?php if(!$is_in_event){?>
            <?= $this->Form->create($userEvent, ['url' => 'events/joinEvent']) ?>

            <?php
            echo $this->Form->hidden('event_id', ['value' => $event->id]);
            ?>
            <?= $this->Form->button(__("I'll be there"),array('class'=>'button expanded light-pink')) ?>
            <?= $this->Form->end() ?>


        <?php }else{
            echo "<p>You are going to this event</p>";
        } ?>

    </div>
    <div class="big-div left-div">
        <div class="div-header">
            <h6 class="header-title">
                Going
            </h6>
        </div>
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns info-div">
                <?php foreach($users_events as $userE):?>

                    <div class="info-avatar">
                    <img class="avatar-small"  src="/images/Photos/url/<?= h($userE->user->photo_url) ?>" alt="">
                </div>
                <?php endforeach?>
            </div>

        </div>


    </div>

</div>

<div class="cell medium-6 large-8">


    <div class="big-div-img right-div">
        <div class="div-figure">
            <figure>
                <img src="/images/Events/photo_url/<?php echo $event->photo_url ?>">
                <figcaption>
                    <small><h1><?php echo $event->name ?></h1></small>
                </figcaption>
            </figure>
        </div>
        <div class="row section-div event-img" >
            <div class=" small-12 medium-6 columns info-div">

                <div class="event-info">
                    <p class="div-name">
                        <?php echo $event->date?>
                    </p>
                    <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo $event->city->name?>

                    </p>
                      <p class="div-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <?php echo $event->direction?>
                      </p>

                    <?php if($event->active == 0){?>
                    <p id="event-over-info">
                        The event is over
                    </p>
                    <?php } ?>
                </div>
            </div>

        </div>



    </div>
    <div class="big-div right-div-div">
        <div class="row section-div" >
            <div class=" small-12 medium-6 columns info-div">
                <p> <?php echo $event->long_description?>
                </p>
            </div>

        </div>

    </div>

</div>




