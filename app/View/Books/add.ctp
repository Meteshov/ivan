<div class="col-md-2 bp-sidebar">
<?php echo $this->element('book_sidebar');?>
</div>
<div class="col-md-10 bp-content">
    <h3>Заполните следующие данные</h3>
    <?php
        echo $this->Form->create('Book',array('action'=>'add'));
        echo $this->Form->input('Book.title',array(
            'label'=>'Название книги:',
            'div'=>array(
                'class'=>'form-group'
            ),
            'class'=>'form-control width-80',
            'type'=>'text'
        ));
        echo $this->Form->input('Book.author',array(
            'label'=>false,
            'div'=>array(
                'class'=>'form-group'
            ),
            'class'=>'form-control width-60',
            'before' => '<label class="custom-bform-label">Авторы:</label>',
            'escape'=>false
        ));
        echo $this->Form->input('Book.description',array(
            'label'=>'Краткое описание:',
            'div'=>array(
                'class'=>'form-group'
            ),
            'class'=>'form-control width-80',
            'type'=>'textarea'
        ));
        echo $this->Form->input('Part.number',array(
            'label'=>false,
            'div'=>false,
            'type'=>'hidden',
            'value'=>1
        ));
        echo $this->Form->button('Добавить книгу',array('type'=>'submit','class'=>'btn btn-primary'));
        echo $this->Form->end();
    ?>
</div>
<!--<form>
    <div class="form-group">
        <label >Название книги:</label>
        <input type="email" class="form-control width-80">
    </div>
    <div class="form-group authors-block">
        <label class="custom-bform-label">Авторы:</label>
        <input type="text" class="form-control width-60">
    </div>
    <div class="form-group">
        <label >Краткое описание:</label>
        <textarea class="form-control width-80"></textarea>
    </div>
</form>-->