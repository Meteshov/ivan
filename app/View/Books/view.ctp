<div class="col-md-12 bp-head">
    <?php
    echo $this->element('book_sidebar_edit');?>
    <?php //echo $this->element('book_sidebar');?>
</div>
<div class="col-md-12">
    <div class="col-md-8 bp-content margin-top-10 col-md-offset-2">
        <?php echo $page['content'];?>
    </div>
    <div class="col-md-2 margin-top-10">
        <h3>Иллюстрации</h3>
        <div class="book-attach-container">
            <?php if(!empty($pictures)){
            foreach($pictures as $picture){?>
                <img src="<?php echo $picture?>" class="img-rounded book-attach-thumb">
            <?php }
            } else {?>
            <?php }?>
        </div>
    </div>
</div>
<div class="col-md-8 bp-content margin-top-10 col-md-offset-4 margin-bot-10">
    <a class="btn btn-info">Предыдущая</a>
    <input type="text" class="form-control page-num" value="1"> из 35
    <a class="btn btn-info">Следующая</a>
</div>
<div style="display: none">
    <div id="img-full">
        <img class="insert-img"/>
    </div>
</div>