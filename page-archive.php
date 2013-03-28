<?php theme_include('header'); ?>
		<div class="row">
			<ul class="small-block-grid-3 archives">
	<?php if(has_posts()): ?>
    <?php while(posts()): ?>
			<li><a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('thumbnail'); ?>" alt="<?php echo article_title(); ?>"></a>
			<h2><a href="<?php echo article_url(); ?>"  style="color: #<?php echo article_custom_field('color', '777')?>"><?php echo article_title(); ?></a></h2></li>
  <?php endwhile; ?>
	<?php endif; ?>		
</ul>
</div>
<?php theme_include('footer'); ?>