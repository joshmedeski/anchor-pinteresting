<?php theme_include('header'); ?>

<!-- Title -->
<div class="row">
	<section>
		<img src="<?php echo article_custom_field('thumbnail'); ?>" alt="thumbnail-<?php echo article_title(); ?>">
		<div class="title">
			<style>
			h2,a {color:#<?php echo article_custom_field('color', '777')?>;}
			</style>
			<h2><?php echo article_title(); ?></h2>
					<p><?php echo article_description(); ?></p>
					<div class="meta">
						<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> in <a href="<?php echo category_url(); ?>"><? echo category_title(); ?></a> by <a href="https://plus.google.com/107309290952544286992?rel=author">Josh Medeski</a>
					</div>
				</div>
			</section>
</div>

<!-- Article -->
<div class="row">
	<section>
		<article>
		<?php echo article_html(); ?>
		<hr>
		<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_google_plusone hide-for-small" g:plusone:size="medium"></a> 
				<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f3ff4eb21813601"></script>
		<!-- AddThis Button END -->
		</article>
	</section>
</div>

<div class="row">
	<section>
		<div class="small-12 columns">
	<?php if(comments_open()): ?>
		<section class="content-box comments">
		    <div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'joshmedeski'; // required: replace example with your forum shortname

		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</div>
		</section>
		<?php endif; ?>
	</section>
</div>




<?php theme_include('footer'); ?>