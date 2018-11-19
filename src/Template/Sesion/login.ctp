<div>
    <?= $this->Form->create(null, ['class' => 'text-center login']) ?>
        <h2>Log in Solatravellers</h2>

        <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" id="mail" name="email" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
            <label for="pass">Password</label>
            <input type="password" id="passw" name="password" placeholder="Password">
        </div>

        <input class="button expanded green-pink" type="submit" value="Sign in">

        <p>Don't have an account? <a href="../sesion/register">Register</a></p>

        <div id="forgot">
            <div class="floated-label-wrapper">
                <input type="email" id="mailf" name="mail input" placeholder="Email">
            </div>
            <input class="button expanded green" type="submit" value="Send">
        </div>
    <?= $this->Form->end() ?>
</div>