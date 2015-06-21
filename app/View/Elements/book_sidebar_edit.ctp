<?php $edit = ($this->params['action']=="edit") ? true : false;?>
<div class="col-md-2">
    <img src="/files/avatars/avatar_sample.png" class="img-rounded user-picture">
    <a href="/dashboard" class="btn btn-info home-btn">Личный кабинет</a>
</div>
<div class="col-md-8 bp-content margin-top-10 no-padding" style="vertical-align: bottom">
    <div class="col-md-2 no-padding"><img src="/files/avatars/avatar_sample.png" class="img-thumbnail"></div>
    <div class="col-md-6">
        <h3><?php echo $book['Book']['title']?></h3>
        <h3><?php echo $book['Book']['author']?></h3>
    </div>
</div>
<?php if($edit):?>
    <div class="col-md-10 margin-top-10">
        <form class="form-inline">
            <div class="form-group">
                <label>Страница</label>
                <input type="text" class="form-control">
                <button class="btn btn-info">Перейти</button>
            </div>
        </form>
    </div>
<?php endif;?>
<!--<div class="col-md-8">
    <h3>Прикрепленные файлы <?php /*if($edit):*/?><a class="btn btn-info new-attach" href="#">Добавить</a><?php /*endif;*/?></h3>
    <div class="row-fluid attached-files">
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
    </div>
    <div class="controls">
            <span class="glyphicon glyphicon-menu-left left-arrow"></span>
            <span class="glyphicon glyphicon-menu-right right-arrow"></span>
    </div>
</div>-->