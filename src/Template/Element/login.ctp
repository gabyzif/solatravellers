
<!-- This is the first modal -->
<div class="reveal callout" id="loginModal" data-reveal>

    <?= $this->Form->create(null, ['url' => ['controller' => 'Sesion', 'action' => 'login'], 'class' => 'text-center login']) ?>
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

    <?= $this->Form->end() ?>
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