<!--<div class="col-md-12 bp-nav no-padding no-margin">
    <ul><li>Личный кабинет</li></ul>
</div>-->
<div class="col-md-12 bp-head">
    <?php
    echo $this->element('book_sidebar_edit');?>
    <?php //echo $this->element('book_sidebar');?>
</div>
<div class="col-md-12">
    <div class="col-md-8 bp-content margin-top-10 col-md-offset-2 no-padding-left">
        <?php echo $this->element('tinyscript');?>
        <textarea id="tinyContainer"></textarea>
        <a href="#" class="btn btn-default btn-success edit-page-btn left-float" title="Сохранить">Отмена</a>
        <a href="#" class="btn btn-default btn-success edit-page-btn save-page right-float" title="Сохранить">Сохранить</a>
        <input type="hidden" class="book_id" value="<?php echo $book['Book']['id'];?>">
        <input type="hidden" class="page_num" value="<?php echo $page['number'];?>">
    </div>
    <div class="col-md-2">
        <h3>Иллюстрации</h3>
        <div class="book-attach-container">
            <button class="btn btn-info margin-bot-10 new-attach">Добавить</button>
            <?php if(!empty($pictures)){
                foreach($pictures as $picture){?>
                    <div>
                        <img src="<?php echo $picture?>" class="img-rounded book-attach-thumb">
                        <span class="glyphicon glyphicon glyphicon-remove-sign remove-attach-btn" aria-hidden="true"></span>
                    </div>
                <?php }
            } else {?>
            <?php }?>
        </div>
    </div>
<div class="uploads invisible">
    <?php echo $this->Form->create('Book',array('action'=>'savePage','type'=>'file'));
    echo $this->Form->input('files.', array('type' => 'file', 'multiple'));
    echo $this->Form->input('page', array('type' => 'hidden','value'=>$page['number']));
    echo $this->Form->input('book', array('type' => 'hidden','value'=>$book['Book']['id']));
    echo $this->Form->input('content', array('type' => 'textarea','class'=>'pageContent'));
    echo $this->Form->end('sub');?>
</div>
</div>
<div style="display: none">
    <div id="img-full">
        <img class="insert-img"/>
    </div>
</div>