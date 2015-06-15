<div class="col-md-12 bp-head">
    <?php
    echo $this->element('book_sidebar_edit');?>
    <?php //echo $this->element('book_sidebar');?>
</div>
<div class="col-md-8 col-md-offset-2 bp-content margin-top-10">
    <?php echo $this->element('tinyscript');?>
    <textarea id="tinyContainer"></textarea>
    <a href="#" class="btn btn-default btn-success edit-page-btn left-float" title="Сохранить">Отмена</a>
    <a href="#" class="btn btn-default btn-success edit-page-btn save-page right-float" title="Сохранить">Сохранить</a>
    <input type="hidden" class="book_id" value="<?php echo $book['Book']['id'];?>">
    <input type="hidden" class="page_num" value="<?php echo $page['number'];?>">
</div>
<div class="uploads invisible">
    <?php echo $this->Form->create('Book',array('action'=>'savePage','type'=>'file'));
    echo $this->Form->input('files.', array('type' => 'file', 'multiple'));
    echo $this->Form->input('page', array('type' => 'hidden','value'=>$page['number']));
    echo $this->Form->input('book', array('type' => 'hidden','value'=>$book['Book']['id']));
    echo $this->Form->input('content', array('type' => 'textarea','class'=>'pageContent'));
    echo $this->Form->end('sub');?>
</div>