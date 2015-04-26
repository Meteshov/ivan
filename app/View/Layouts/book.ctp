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
    echo $this->Html->css(array('bootstrap.min','additional'));
    echo $this->Html->script(array('jquery-1.11.2.min','book','tinymce.min'));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-2 bp-sidebar">
            <?php echo $this->element('book_sidebar');?>
        </div>
        <div class="col-md-10 bp-content">
            <?php
            if(($this->params['controller'] == 'books') && ($this->params['action'] == 'edit'))
                echo $this->element('editor');
            echo $this->fetch('content');
            ?>
        </div>
    </div>
</div>
</body>
</html>
