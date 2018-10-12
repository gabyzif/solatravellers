<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="card-profile-stats">
    <div class="card-profile-stats-intro" >
        <img class="card-profile-stats-intro-pic" src="https://pbs.twimg.com/profile_images/732634911761260544/OxHbNdTF.jpg" alt="profile-image" />

        <div class="card-profile-stats-intro-content">
            <h1><?= h($user->name) ?></h1>
            <a>Verify user</a>

           <!--   <p>Level: <b>Traveller</b></small> </p>-->

            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>

            <p>Name:<?= h($user->name) ?></p>
            <p>Email:<?= h($user->email) ?></p>
            <p>Password:<?= h($user->password) ?></p>
            <p>City:</p>
            <p>Birthday:<?= h($user->dateOfBirth) ?></p>







        </div> <!-- /.card-profile-stats-intro-content -->

    </div> <!-- /.card-profile-stats-intro -->

    <div class="grid-x grid-margin-x level">

        <div class="cell small-10">
            <h2>Level</h2>

            <div class="slider" data-slider data-start="30" data-initial-start="30" data-end="90" data-step="30">

                <span id="range" class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="sliderOutput2"></span>
                <span class="slider-fill" data-slider-fill></span>


            </div>
            <img  id="level" src= "etc/images/baby.png">
            <p id="plevel"></p>

        </div>



    </div>
    <button class="button large" data-open="levelModal">How to level up</button>

    <div class="reveal callout" id="levelModal" data-reveal>

        <p><strong>To be a regular traveller</strong></p>
        <p>Go to events and get verified by 5 regulars or expert travellers </p>

        <p><strong>To be an expert traveller</strong></p>
        <p>Go to events and get verified by 5 expert or expert travellers, be active in the groups </p>
    </div>

</div> <!-- /.card-profile-stats -->



</body>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/what-input/dist/what-input.js"></script>
<script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="js/app.js"></script>
</html>
