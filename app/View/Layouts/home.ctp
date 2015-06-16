<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array('bootstrap.min','owl.carousel','owl.theme','additional'));
    echo $this->Html->script(array('jquery-1.11.2.min','owl.carousel','scripts'));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div class="header-main shadow">
    <div class="header-main-image">
        <img src="/img/header2.jpg"/>
    </div>
    <div class="header-main-nav">
        <div class="header-main-left">
        <ul>
               <li><a href="#">Главная</a></li><!--
            --><li class="item-separator"><span class="glyphicon glyphicon-option-vertical"></span></li><!--
            --><li class="item-large"><a href="#">Личный кабинет</a></li><!--
            --><li class="item-separator"><span class="glyphicon glyphicon-option-vertical"></span></li><!--
            --><li><a href="#">О нас</a></li>
        </ul>
        </div>
        <div class="header-main-right">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Ключевое слово...">
                </div>
                <button type="submit" class="btn btn-default">Поиск</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12">
        <?php echo $this->fetch('content'); ?>
    </div>
    <div class="row footer">

    </div>
</div>
</body>
</html>