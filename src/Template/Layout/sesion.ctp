<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

/**
 *
 * @property \App\View\AppView $this
 */
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>


<div class="hero-full-screen">

    <?= $this->element('header') ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

</div>

<footer>
    <?= $this->element('footer') ?>
</footer>

<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/what-input/dist/what-input.js"></script>
<script src="/node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
