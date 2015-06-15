<div class="main-col col-md-10">
    <!--<div class="search-form-wrap row-fluid">
            <form class="form-horizontal">
                <div class="form-group  has-feedback">
                    <input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                </div>
            </form>
    </div>-->
    <div id="main-page-slider" class="owl-carousel owl-theme">
        <div class="item"><img src="/img/main_page_slider/1.jpg" alt="The Last of us"></div>
        <div class="item"><img src="/img/main_page_slider/2.jpg" alt="GTA V"></div>
        <div class="item"><img src="/img/main_page_slider/3.jpg" alt="Mirror Edge"></div>
    </div>
</div>
<div class="sidebar col-md-2">
    <div class="login-wrap row">
        <div class="row register" style="display: none">
            <?php echo $this->Form->create('User',array('action'=>'register'));?>
            <?php
            echo $this->Form->input('User.email',array(
                'type' => 'email',
                'label' => false,
                'div'=> array('class'=>'form-group'),
                'class'=> 'form-control',
                'placeholder'=>'Email'
            ));
            echo $this->Form->input('User.password',array(
                'type' => 'password',
                'label' => false,
                'div'=> array('class'=>'form-group'),
                'class'=> 'form-control',
                'placeholder'=>'Пароль'
            ));
            echo $this->Form->input('User.confirm',array(
                'type' => 'password',
                'label' => false,
                'required'=>true,
                'div'=> array('class'=>'form-group'),
                'class'=> 'form-control',
                'placeholder'=>'Еще раз...'
            ));
            echo $this->Form->button('Вперед',array(
                'type'=>'submit',
                'class'=>'btn btn-success'
            ));
            ?>
            <a class="btn btn-info login-open right-float" href="#">Отмена</a>
            <?php echo $this->Form->end();?>
        </div>
        <div class="row login">
            <?php echo $this->Form->create('User',array('action'=>'login'));?>
            <?php
            echo $this->Form->input('User.email',array(
                'type' => 'email',
                'label' => false,
                'div'=> array('class'=>'form-group'),
                'class'=> 'form-control',
                'placeholder'=>'Email'
            ));
            echo $this->Form->input('User.password',array(
                'type' => 'password',
                'label' => false,
                'div'=> array('class'=>'form-group'),
                'class'=> 'form-control',
                'placeholder'=>'Пароль'
            ));
            echo $this->Form->button('Вперед',array(
                'type'=>'submit',
                'class'=>'btn btn-success'
            ));
            ?>
            <a class="btn btn-info register-open right-float" href="#">Регистрация</a>
            <?php echo $this->Form->end();?>
        </div>
    </div>
    <div class="testimonials-wrap row"></div>
</div>