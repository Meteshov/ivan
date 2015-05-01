<?php print_r($books);?>
<table class="table table-hover books-list">
<?php if(!empty($books)){?>
    <thead>
        <tr class="info">
            <td>Обложка</td>
            <td>Название</td>
            <td>Короткое описание</td>
            <td>Действия</td>
        </tr>
    </thead>
    <?php foreach($books as $book){?>
        <tr class="success">
            <td><img src="/files/avatars/avatar_sample.png" class="img-rounded book-cover"></td>
            <td><?php echo $book['Book']['title'];?></td>
            <td><?php echo $book['Book']['description'];?></td>
            <td>
                <a href="/dashboard/books/edit/<?php echo $book['Book']['id'];?>/1" class="btn btn-default">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a href="/dashboard/books/delete/<?php echo $book['Book']['id'];?>" class="btn btn-default">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
    <?php }?>
<?php }?>
</table>