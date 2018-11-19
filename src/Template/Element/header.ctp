<!doctype html>
<div class="main" id="animated-menu" data-animate="hinge-in-from-top spin-out">
    <nav class="hover-underline-menu data-menu-underline-from-center">
        <ul class="menu align-center">
            <li class="logo-nav"><a href="/pages"><img src="/images/logo.png"/></a></li>
            <li><a href="/tgroups">Community </a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/articles">Blog</a></li>
            <?php if(!isset($User)): ?>
                <!--            <li><a data-open="loginModal" href="/sesion/login">Log in</a></li>-->
            <li><a href="/sesion/login">Log in</a></li>
            <?php else: ?>
                <li><a href="/sesion/logout">Log out</a></li>
            <?php endif; ?>
        </ul>



    </nav>


    <?php if (isset($User))
    {
        if($User->type_of_account_id == 5) {?>

        <nav class="nav-article">
            <ul class="menu">
                <li><?= $this->Html->link(__('Comments'), ['action' => '../comments/index']) ?> </li>
                <li><?= $this->Html->link(__('Events'), ['action' => '../events/index']) ?> </li>
                <li><?= $this->Html->link(__('Groups'), ['action' => '../tgroups/index']) ?> </li>
                <li><?= $this->Html->link(__('Conversations'), ['action' => '../conversations/index']) ?> </li>


            </ul>
        </nav>
    <?php } }?>
</div>

<?php if(!isset($User)): ?>
    <?= $this->element('login') ?>
<?php endif; ?>

</html>
