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
    echo $this->Html->css(array('bootstrap.min','owl.carousel','owl.theme','colorbox'));
    echo $this->Html->css(array('additional'),'stylesheet',array('media'=>'screen'));
    echo $this->Html->script(array('jquery-1.11.2.min','owl.carousel','jquery.colorbox-min','scripts'));
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
    <div class="header-main-nav container-fluid no-padding no margin">
        <div class="header-main-left col-md-8 col-lg-8">
        <ul>
               <li><a href="#">Главная</a></li><!--
            --><li class="item-separator"><span class="glyphicon glyphicon-option-vertical"></span></li><!--
            --><li class="item-large"><a href="#" class="login-btn">Личный кабинет</a></li><!--
            --><li class="item-separator"><span class="glyphicon glyphicon-option-vertical"></span></li><!--
            --><li><a href="#">О нас</a></li>
        </ul>
        </div>
        <div class="header-main-right col-md-2 col-lg-4">
            <form>
                <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                    </div>
                </div>
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