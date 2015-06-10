<div class="col-md-10">
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
    <div class="form-group">
        <div class="offset-30 col-md-4">
            <button type="submit" class="btn btn-default">Обновить</button>
        </div>
    </div>
</form>
</div>