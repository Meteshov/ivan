<?php $action = $this->params['action'];?>
<div class="col-m-12 user-nav margin-bot-50">
    <ul class="nav nav-pills margin-left-30">
        <li role="presentation" class="<?php echo ($action == 'dashboard') ? 'active': '';?>">
            <a href="/dashboard">Личный кабинет</a>
        </li>
        <li role="presentation" class="<?php echo ($action == 'books') ? 'active': '';?>">
            <a href="/dashboard/books">Мои книги</a>
        </li>
        <li role="presentation" class="<?php echo ($action == 'bookmarks') ? 'active': '';?>">
            <a href="/dashboard/bookmarks">Мои закладки</a>
        </li>
        <li role="presentation" class="<?php echo ($action == 'mentions') ? 'active': '';?>">
            <a href="/dashboard/mentions">Мои отзывы</a>
        </li>
        <li role="presentation">
            <a href="/users/logout">Выход</a>
        </li>
    </ul>
</div>