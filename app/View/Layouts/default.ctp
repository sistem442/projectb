
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('sm-core-css');
                echo $this->Html->css('sm-blue/sm-blue.css');
                echo $this->Html->css('main');
                echo $this->Html->script('jquery.min');
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('jquery.smartmenus.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    
</head>
<body>
    <div id="container">
        <div id="header" class="col-xs-12" style="background-color: #9d9d9d">
            <a href="/" id="site-title">Electronics Tree</a>
        </div>
        <div id="content" class="row nopadding">

                <?php echo $this->Session->flash(); ?><?php echo $this->fetch('content'); ?>
        </div>
<!--		<div id="footer">
                <?php /*echo $this->Html->link(
                                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                                'http://www.cakephp.org/',
                                array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                        );
                 * 
                 */
                ?>
                <p>
                        <?php //echo $cakeVersion; ?>
                </p>
        </div>-->
    </div>
	<?php //echo $this->element('sql_dump'); ?>
    <?php echo $this->element('google-analytics'); ?>
</body>
</html>
