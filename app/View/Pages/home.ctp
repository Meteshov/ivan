<div class="row register">
    <?php echo $this->Form->create('User',array('action'=>'register'));?>
    <?php
        echo $this->Form->input('User.email',array(
            'type' => 'email',
            'label' => 'E-mail'
        ));
        echo $this->Form->input('User.password',array(
            'type' => 'password',
            'label' => 'Пароль'
        ));
        echo $this->Form->input('User.confirm',array(
            'type' => 'password',
            'label' => 'Еще раз',
            'required'=>true
        ));
        echo $this->Form->button('Вперед',array(
            'type'=>'submit',
            'class'=>'btn btn-success'
        ));
    ?>
    <?php echo $this->Form->end();?>
</div>
<div class="row login">
    <?php echo $this->Form->create('User',array('action'=>'login'));?>
    <?php
        echo $this->Form->input('User.email',array(
            'type' => 'email',
            'label' => 'E-mail'
        ));
        echo $this->Form->input('User.password',array(
            'type' => 'password',
            'label' => 'Пароль'
        ));
        echo $this->Form->button('Вперед',array(
            'type'=>'submit',
            'class'=>'btn btn-success'
        ));
    ?>
    <?php echo $this->Form->end();?>
</div>