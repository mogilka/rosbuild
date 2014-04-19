<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
	Innovation_Settings();
	include('header.php'); 
	include('top.php'); 
?>
	<div class="wrapper clearfix">
                <div id="waterwheel-carousel-default">
                  <div class="carousel-controls">
                    <div class="carousel-prev"><a href="#"><img src="<?php get_theme_url(); ?>/images/left-arrow.png" alt="previous" /></a></div>
                    <div class="carousel-next"><a href="#"><img src="<?php get_theme_url(); ?>/images/right-arrow.png" alt="next" /></a></div>
                  </div>
                  <div class="carousel-images">
                    <img src="/data/uploads/carousel/drawing.jpg" alt="drawing" />
                    <img src="/data/uploads/carousel/prototype.jpg" alt="prototype" />
                    <img src="/data/uploads/carousel/prototype2.jpg" alt="prototype" />
                    <img src="/data/uploads/carousel/drawing-room.jpg" alt="drawing-room" />
                    <img src="/data/uploads/carousel/sitting-room.jpg" alt="sitting-room" />
                    <img src="/data/uploads/carousel/kitchen.jpg" alt="kitchen" />
                    <img src="/data/uploads/carousel/designer.jpg" alt="designer" />
                    <img src="/data/uploads/carousel/designer2.jpg" alt="designer" />
                  </div>
                </div>
	</div>
<?php include('footer.php'); ?>
