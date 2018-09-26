<!doctype html>
<div class="main" id="animated-menu" data-animate="hinge-in-from-top spin-out">
    <nav class="hover-underline-menu data-menu-underline-from-center">
        <ul class="menu align-center">
            <li class="logo-nav"><a href="#"><img src="images/logo.png"/></a></li>
            <li><a href="#">Community </a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Blog</a></li>
            <li><a data-open="loginModal" href="#">Log in</a></li>
        </ul>

    </nav>
</div>

<?= $this->element('login') ?>


</html>
