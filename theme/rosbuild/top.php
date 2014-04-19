<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<body id="<?php get_page_slug(); ?>" >
	<header>
		<div class="header">
			<div class="wrapper">
                <div class="right-col">
                    <div class="colorpane colorpane33 custom-bravo border-shadowed">&nbsp;</div>
                    <div class="colorpane colorpane66 custom-brown border-shadowed">&nbsp;</div>
                    <div class="colorpane colorpane99 custom-black border-shadowed">&nbsp;</div>
                </div>
                <div class="mid-col">
                    <a href="<?php get_site_url(); ?>" id="logo" >
                        <img src="http://localhost/ros-build.com/data/uploads/logo.png" alt="RosBuild" align="center" /></a>
                    <div class="left-col">
                        <div class="colorpane colorpane33 custom-bravo border-shadowed">&nbsp;</div>
                        <div class="colorpane colorpane66 custom-brown border-shadowed">&nbsp;</div>
                        <div class="colorpane colorpane99 custom-black border-shadowed">&nbsp;</div>
                    </div>
                </div>
				<center>
                    <nav id="main-nav">
                        <ul>
                            <?php get_navigation(get_page_slug(FALSE)); ?>
                        </ul>
                    </nav>
                </center>
			</div>
		</div>
    </header>
