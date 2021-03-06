<?php
/**
 * @var App\View\AppView $this
 */
?>
<html>
<head>
    <?= $this->element('head') ?>

</head>
<body>
<?= $this->element('header') ?>
<div class="grid-x" id="main">
    <?= $this->fetch('content') ?>
</div>

</body>


<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/what-input/dist/what-input.js"></script>
<script src="/node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="/js/app.js"></script>
</html>