<!doctype html>
<div class="main" id="animated-menu" data-animate="hinge-in-from-top spin-out">
    <nav class="hover-underline-menu data-menu-underline-from-center">
        <ul class="menu align-center">
            <li class="logo-nav"><a href="#"><img src="/images/logo.png"/></a></li>
            <li><a href="#">Community </a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Blog</a></li>
            <?php if(!isset($User)): ?>
                <!--            <li><a data-open="loginModal" href="/sesion/login">Log in</a></li>-->
            <li><a href="/sesion/login">Log in</a></li>
            <?php else: ?>
                <li><a href="/sesion/logout">Log out</a></li>
            <?php endif; ?>
        </ul>

    </nav>
</div>

<?php if(!isset($User)): ?>
    <?= $this->element('login') ?>
<?php endif; ?>

</html>
