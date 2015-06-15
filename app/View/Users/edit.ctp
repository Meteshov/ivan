<div class="col-md-12 edit-user-info">
    <div class="col-md-8 col-md-offset-1 edit-user-info-form">
        <?php /*$this->Html->addCrumb('Редактировать профиль',array('controller'=>'users','action'=>'edit'));*/?><!--
        --><?php /*echo $this->Html->getCrumbs(' > ', 'Home');*/?>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                <div class="col-md-4">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label">Имя</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Имя">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label">Фамилия</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Фамилия">
                </div>
            </div>
            <div class="edit-user-info-submit">
                <button type="submit" class="btn btn-default btn-info">Обновить</button>
            </div>
        </form>
    </div>
</div>