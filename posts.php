<?php theme_include('header'); ?>

	<?php if(has_posts()): ?>
    <?php while(posts()): ?>
		<div class="row">
			<section>
				<a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('thumbnail'); ?>" alt="<?php echo article_title(); ?>"></a>
				<div class="title">
					<h2><a href="<?php echo article_url(); ?>"  style="color: #<?php echo article_custom_field('color', '777')?>"><?php echo article_title(); ?></a></h2>
					<p><?php echo article_description(); ?></p>
					<div class="meta">
						<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> in <a href="<?php echo category_url(); ?>"><? echo category_title(); ?></a>
					</div>
				</div>
			</section>
		</div>
    <?php endwhile; ?>

<div class="row">
	<section>
	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>		
	</section>
</div>

<?php theme_include('footer'); ?>