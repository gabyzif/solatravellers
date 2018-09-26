<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <?= $this->element('head') ?>

</head>
<body>


<div class="hero-full-screen">

    <?= $this->element('header') ?>

    <div>

        <form class="text-center login">
            <h2>Log in Solatravellers</h2>

            <div class="floated-label-wrapper">
                <label for="email">Email</label>
                <input type="email" id="mail" name="email input" placeholder="Email">
            </div>
            <div class="floated-label-wrapper">
                <label for="pass">Password</label>
                <input type="password" id="passw" name="password input" placeholder="Password">
            </div>

            <input class="button expanded green-pink" type="submit" value="Sign in">
            <input class="button expanded green" type="submit" value="Sign in with Facebook">

            <a id="a-forgot" onclick="showHideForget()">Forgot your password?</a>
            <p>Don't have an account? <a data-open="regisModal">Register</a></p>

            <div id="forgot">
                <div class="floated-label-wrapper">
                    <input type="email" id="mailf" name="mail input" placeholder="Email">
                </div>
                <input class="button expanded green" type="submit" value="Send">
            </div>
        </form>
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>


        <div class="reveal callout" id="regisModal" data-reveal>

            <form class=" text-center register">
                <h2>Become A Member</h2>
                <div class="floated-label-wrapper">
                    <label for="full-name">Full name</label>
                    <input type="text" id="full-name" name="full name input" placeholder="Full name">
                </div>
                <div class="floated-label-wrapper">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email input" placeholder="Email">
                </div>
                <div class="floated-label-wrapper">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password input" placeholder="Password">
                </div>

                <label for="userPhoto" class="button expanded light-pink">Upload File</label>
                <input type="file" id="userPhoto" class="show-for-sr">

                <input class="button expanded green-pink" type="submit" value="Sign up">
                <input class="button expanded green" type="submit" value="Sign up with Facebook">

                <p>Do you have an account? <a data-open="loginModal" >Sing in</a></p>
            </form>

            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>

        </div>



    </div>


</div>





<footer>
    <?= $this->element('footer') ?>


</footer>


<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/what-input/dist/what-input.js"></script>
<script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
