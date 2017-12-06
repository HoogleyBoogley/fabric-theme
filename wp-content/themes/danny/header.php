<!DOCTYPE html>
<!-- Refer to this site! https://premium.wpmudev.org/blog/developer-super-cheat-sheet/ -->
<?php
$currentUser = wp_get_current_user();
$currentUser = $hf_user->user_login;
?>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    </head>
    <body>
        <div class="fixed-top nav-header">
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            A HoogleyBoogley Site
                        </div>
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="float-right">
                                <i class="fa fa-facebook" aria-hidden="true"></i> 
                                <i class="fa fa-twitter" aria-hidden="true"></i> 
                                <i class="fa fa-instagram" aria-hidden="true"></i> 
                                <i class="fa fa-google-plus" aria-hidden="true"></i> 
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
            	<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            		<div class="navToggleBtn">
		  				<div class="hamburger-icon"></div>
					</div>
            	</button>
            	
            	<?php
            		    
                    $args = array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'container' => 'div',
                        'container_id' => 'navbarSupportedContent',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id' => false,
                        'menu_class' => 'navbar-nav ml-auto',
                        'depth' => 2,
                        'fallback_cb' => 'bs4navwalker::fallback',
                        'walker' => new bs4navwalker()
                    );
                                		    
                    wp_nav_menu($args);
            		    
                ?>
            
            <!--
            	<div class="collapse navbar-collapse" id="navbarSupportedContent">
            		<ul class="navbar-nav ml-auto">
            			<li class="nav-item active">
            				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            			</li>
            			<li class="nav-item active">
            				<a class="nav-link" href="#">About</a>
            			</li>
            			<li class="nav-item active">
            				<a class="nav-link" href="#">Blog</a>
            			</li>
            			<li class="nav-item active">
            				<a class="nav-link" href="#">Community</a>
            			</li>
            			<li class="nav-item active">
            				<a class="nav-link" href="#">Contact</a>
            			</li>
            		</ul>
            	</div> -->
            </nav>
        </div>