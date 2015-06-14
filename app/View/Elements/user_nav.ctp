<?php $action = $this->params['action'];?>
<!--<div class="col-m-12 user-nav margin-bot-50">
    <ul class="nav nav-pills margin-left-30">
        <li role="presentation" class="<?php /*echo ($action == 'dashboard') ? 'active': '';*/?>">
            <a href="/dashboard">Личный кабинет</a>
        </li>
        <li role="presentation" class="<?php /*echo ($action == 'books') ? 'active': '';*/?>">
            <a href="/dashboard/books">Мои книги</a>
        </li>
        <li role="presentation" class="<?php /*echo ($action == 'bookmarks') ? 'active': '';*/?>">
            <a href="/dashboard/bookmarks">Мои закладки</a>
        </li>
        <li role="presentation" class="<?php /*echo ($action == 'mentions') ? 'active': '';*/?>">
            <a href="/dashboard/mentions">Мои отзывы</a>
        </li>
        <li role="presentation">
            <a href="/users/logout">Выход</a>
        </li>
    </ul>
</div>-->
<div class="col-md-12 user-nav margin-bot-50">
    <ul class="navigation"><!--
        --><li class="first-item">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
        </li><!--
        --><li class="<?php echo ($action == 'dashboard') ? 'active': '';?> nav-list-item">
            <a href="/dashboard">Личный кабинет</a>
        </li><!--
        --><li class="<?php echo ($action == 'books') ? 'active': '';?> nav-list-item">
            <a href="/dashboard/books">Мои книги</a>
        </li><!--
        --><li class="<?php echo ($action == 'bookmarks') ? 'active': '';?> nav-list-item">
            <a href="/dashboard/bookmarks">Мои закладки</a>
        </li><!--
        --><li class="<?php echo ($action == 'mentions') ? 'active': '';?> nav-list-item">
            <a href="/dashboard/mentions">Мои отзывы</a>
        </li><!--
        --><li class="nav-list-item">
            <a href="/users/logout">Выход</a>
        </li>
    </ul>
</div>