<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
</head>
<body>

<div class="grid-x" id="main">
    <!--left-->
    <div class="cell medium-6 large-4">
        <div class="big-div left-div btn">
            <button class="button expanded light-pink ">Create event</button>

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
                        <img class="avatar" src="/images/Photos/url/<?= h($my_event->event->photo->url) ?>"  alt="<?php echo $my_event->event->name ?>
">
                    </div>
                    <div class="name-info">
                        <a class="div-name"   href="<?= $this->Url->build(['action' => 'view', $my_event->id ])?>" >
                            <?php echo $my_event->event->name ?>
                        </a>
                        <p class="div-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?php echo $my_event->event->date ?>

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

        <div class="big-div left-div">
            <div class="div-header">
                <h6 class="header-title">
                    Search
                </h6>
            </div>
            <div class="row section-div" >
                <div class=" small-12 medium-6 columns search-div">
                    <div class="search-input-div">
                        <input type="search" name="search" placeholder="Name" class="animated-search-form">
                        <input type="search" name="search" placeholder="City" class="animated-search-form">

                        <input type="date" id="start" name="trip"
                               value="2018-07-22"
                               min="2018-01-01" max="2018-12-31" />

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
                <h6 class="header-title"> Events </h6>


            </div>
            <div class="row section-div" >
                <?php foreach ($events as $event):?>
                    <div class="small-12 medium-6 columns info-div">
                        <div class="info-avatar">
                            <img class="avatar" src="/images/Photos/url/<?= h($event->photo->url) ?>"   alt="                                <?php echo $event->name?>
">
                        </div>
                        <div class="name-info">
                            <a class="div-name"   href="<?= $this->Url->build(['action' => 'view', $event->id ])?>">

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
                                <?php echo $event->city->name?>

                            </p>
                        </div>

                        <button class="button">Join</button>

                    </div>

                <?php endforeach;?>

            </div>
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

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/what-input/dist/what-input.js"></script>
<script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>