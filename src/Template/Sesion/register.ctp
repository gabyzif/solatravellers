<div class="row">
    <h2>Become A Member</h2>



    <?= $this->Form->create($user, ['class' => 'text-center register']) ?>



        <div class="floated-label-wrapper">
            <label for="full-name">Full name</label>
            <?= $this->Form->control('name', ['placeholder'=>'Name', 'label' => false]) ?>
        </div>
    <?php

        echo $this->Form->control('name',['placeholder'=>'Name', 'label'=>false, 'class' => 'floated-label-wrapper']);
        echo $this->Form->control('surname',['placeholder' => 'Last name','label'=>false]);
        echo $this->Form->control('password',['placeholder' => 'Pass','label'=>false]);
        echo $this->Form->control('email',['placeholder' => 'Email','label'=>false]);
        echo $this->Form->control('idNacionalidad', ['placeholder' => 'Nacionality','label'=>false]);
        echo $this->Form->control('idTypeOfAccount',['placeholder' => 'Account','label'=>false]);
        echo $this->Form->control('dateOfBirth',['placeholder' => 'Date of Birth','label'=>false]);

        ?>

    <input class="button expanded green-pink" type="submit" value="Sign up">
    <input class="button expanded green" type="submit" value="Sign up with Facebook">

    <p>Do you have an account? <a>Sing in</a></p>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>


    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>
</div>