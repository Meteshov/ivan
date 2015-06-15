<?php $edit = ($this->params['action']=="edit") ? true : false;?>
<div class="col-md-2">
    <img src="/files/avatars/avatar_sample.png" class="img-rounded user-picture">
</div>
<div class="col-md-8">
    <h3>Прикрепленные файлы <?php if($edit):?><a class="btn btn-info new-attach" href="#">Добавить</a><?php endif;?></h3>
    <div class="row-fluid attached-files">
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <div class="item"><img src="/files/avatars/avatar_sample.png" class="img-rounded" height="85px"></div>
        <!--<a class="btn btn-success center-block" href="/dashboard/edit">Профиль</a>-->
    </div>
    <div class="controls">
            <span class="glyphicon glyphicon-menu-left left-arrow"></span>
            <span class="glyphicon glyphicon-menu-right right-arrow"></span>
    </div>
</div>