<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

	<footer class="clearfix" >
		<?php get_footer(); ?>
	 	<div class="wrapper clearfix">
            <hr>
            <div class="right-col">
                <span class="phone phone-code">495</span>
                <span class="phone phone-number">967 59 84</span>
            </div>
            <div class="mid-col">
                <div class="left-col">
                    <span class="phone phone-code">495</span>
                    <span class="phone phone-number">967 59 60</span>
                </div>
                <center><div id="feedback"></div></center>
            </div>
		</div>
	 	<div class="wrapper clearfix">
            <div width="100%" align="center"></div>
			<div class="left">&copy; <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">
                Email: <a href="mailto:rosbuildmail@gmail.com">rosbuildmail@gmail.com</a>
                <!-- <?php get_component('share'); ?> -->
            </div>
		</div>
	</footer>
	 
</body>
</html>
