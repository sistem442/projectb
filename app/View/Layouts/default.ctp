
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
            <div class="col-xs-4" id="search_div">
                <div id="search_section">
                    <div id="search_left">
                        <form id="search_form">
                            <input 
                                type="text" 
                                id="search"
                                title="<?php echo __("Search"); ?>"
                                placeholder="<?php echo __(" Search"); ?>" 
                                style=" width:100%; border: 0px solid; padding: 0px 8px; height: 30px; text-overflow: ellipsis;"
                            />
                        </form>
                    </div>
                    <div id="search_right"><a id="search_button" href="#" class="magni glyphicon glyphicon-search"></a></div>

                </div><!-- search_section -->
            </div>
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
<script>
    /***************************************************************************
     *                     
     *                     for search box
     *                      
     **************************************************************************/
    $('#search_button').click(function() {
        var val = '"' + $('#search').val() + '"';
        console.log(val);
        make_search_post(val);
      });
    $("#search_form").submit(function (event) {
        var val = '"' + $('#search').val() + '"';
        console.log(val);
        event.preventDefault();
        make_search_post(val);
    });
    $('input,textarea').focus(function () {
        $(this).removeAttr('placeholder');
    });
    function make_search_post(search_string) {

        // Send the data using post
        var posting = $.post( "/search/search", { search_string: search_string } );

        // Put the results in a div
        posting.done(function( data ) {
            console.log(data);
//          var content = $( data ).find( "#content" );
//          $( "#result" ).empty().append( content );
        });
      }
</script>
</html>
