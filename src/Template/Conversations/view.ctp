<div class="grid-x" id="main">
    <!--left-->
    <div class="cell medium-6 large-8 ">
        <div class="big-div left-div">

            <div class="row section-div" >
                <div class="small-12 medium-6 columns info-div">
                    <div class="article-row-section">
                        <div class="article-row-section-inner">

                                <article class="article-row">
                                    <div class="article-row-content">
                                        <h3 class="article-row-content-header"><?php echo $conversation->Description?></h3>

                                        <p class="article-row-content-description"><?php echo $conversation->LongDescription?></p>

                                        <p class="article-row-content-author">By <?php echo $conversation->user->name?></p>
                                        <time class="article-row-content-time" datetime="2008-02-14 20:00"><?php echo $conversation->Date?></time>
                                    </div>
                                </article>

                            <?php foreach ($conversation->comments as $comment):?>

                                <article class="article-row">
                                    <div class="article-row-content">
                                        <p class="article-row-content-description"><?php echo $comment->description ?>.</p>

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
                        <?php foreach($conversations as $conv):?>
                            <img class="avatar-small"  src="/images/Photos/url/<?= h($conv->user->photo_url) ?>" alt="<?= h($conv->user->name) ?>">
                       <?php endforeach;?>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>
