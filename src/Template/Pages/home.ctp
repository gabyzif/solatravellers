<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?= $this->element('head') ?>

</head>
<body>


<div class="hero-full-screen">

    <?= $this->element('header') ?>


    <div class="middle-content-section id=homeHead">
        <h1>Solatravellers</h1>
        <h2>The community of women traveling alone around the world</h2>
        <button class="button large">Join new groups</button>
        <button class="button large">Events</button>
        <button class="button large">Blog</button>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
    </div>

</div>

<div id="main-content-section" data-magellan-target="main-content-section">


    <div class="bloqs events">
        <h3 class="">Events in Buenos Aires <span class="label secondary">Change city</span></h3>


        <div class="img-grid father"  >

            <article id="b1" class="block" style= "background-image:url(images/event01.jpg)">
                <h4 class="block-text">Mundolingo</h4>

                <div class="block block-p">
                    <p>The first multicultural event in Buenos Aires. Great plan to meet new people, practise other languages  while having a great drink.</p>
                    <a><i  class="fa fa-plus-circle" ></i></a>
                </div>
            </article>

            <article id="b2" class="block" style= "background-image:url(images/event02.jpg)">
                <h4 class="block-text">Mate club</h4>
                <div class="block block-p" >
                    <p>The best way to connect with locals and practise your spanish. Experience a unique afternoon with friends, mate and more </p>
                    <a><i  class="fa fa-plus-circle" ></i></a>
                </div>
            </article>

            <article id="b3" class="block" style= "background-image:url(images/event02.jpg)" >
                <h4 class="block-text">Bar hoping</h4>
                <div class="block block-p" >
                    <p>The best way to connect with locals and practise your spanish. Experience a unique afternoon with friends, mate and more </p>
                    <a><i  class="fa fa-plus-circle" ></i></a>
                </div>
            </article>


            <article id="b4" class="block" style= "background-image:url(images/event02.jpg)">
                <h4 class="block-text">Mate club</h4>
                <div class="block block-p" >
                    <p>The best way to connect with locals and practise your spanish. Experience a unique afternoon with friends, mate and more </p>
                    <a><i  class="fa fa-plus-circle" ></i></a>
                </div>
            </article>

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
