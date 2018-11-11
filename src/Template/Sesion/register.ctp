<div class="row">
    <h2>Become A Member</h2>



    <?= $this->Form->create($user, ['type'=> 'file', 'class' => 'text-center register']) ?>


    <?php

        echo $this->Form->control('name',['placeholder'=>'Name', 'label'=>false, 'class' => 'floated-label-wrapper']);
        echo $this->Form->control('surname',['placeholder' => 'Last name','label'=>false]);
        echo $this->Form->control('password',['placeholder' => 'Pass','label'=>false]);
        echo $this->Form->control('email',['placeholder' => 'Email','label'=>false]);
        echo $this->Form->control('nacionality_id', ['options' => $nacionality,'label'=>false]);
        //echo  $this->Form->control('type_of_account_id', ['options' => $typeOfAccount,'label'=>false]);
        echo $this->Form->control('dateOfBirth',array(
            'label' => false,
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 70,
            'maxYear' => date('Y') - 18 ));

        echo $this->Form->control('photo_url', [
                'type'=>'file',
                'label'=>false
        ]);

        ?>

    <input class="button expanded green-pink" type="submit" value="Sign up">
    <p>Do you have an account? <a>Sing in</a></p>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>


    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>
</div>