<div class="col-md-12 header">
    <div class="col-md-2 avatar-wrap">
        <div class="row-fluid margin-bot-10 avatar-container">
            <img src="/files/avatars/avatar_sample.png" class="img-rounded user-picture">
            <span class="center-block shadow-text">Редактировать фото</span>
        </div>
        <div class="row-fluid">
            <a class="btn btn-info center-block" href="/dashboard/edit">Профиль</a>
        </div>
    </div>
    <div class="col-md-6 info-wrap">
        <div class="user-info">
            <p><!--<span>Имя:</span> --><?php echo $user['first_name'];?></p>
            <p><!--<span>Фамилия:</span> --><?php echo $user['last_name'];?></p>
            <p><span class="text-muted">Email:</span> <?php echo $user['email'];?></p>
        </div>
    </div>
    <div class="col-md-4 dashboard-search">
        <form class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control">
                <button class="btn btn-info">Поиск</button>
            </div>
        </form>
    </div>
    <!--<div class="col-md-4 add-book-wrap">
        <a href="/dashboard/books/add">Добавить книгу</a>
    </div>-->
</div>