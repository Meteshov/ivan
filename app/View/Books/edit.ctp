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
<div class="invisible">
    <div id="drop"></div>
</div>