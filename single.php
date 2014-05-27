
<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>  
	<div id="blogcontent">
	<div class="blog">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div  class="blogtitle" ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>	
		<div class="blogdate" title="阅读量"><?php echo getPostViews(get_the_ID()); ?>  </div>
		<div class="blogcom" title="评论数"><?php comments_number('0','1','%') ?></div>
		<div class="blogcon">
			<?php the_content(); ?>
			<div class="ad">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8475840979071605";
/* adforgeek1 */
google_ad_slot = "9275269862";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
		</div>	
		<div class="blogmeta">
			<span class="blogcate">分类: <?php the_category(', '); ?>  </span>
			<span class="blogau">作者: <a><?php the_author(); ?></a></span>
		</div>

	<?php endwhile; else: ?>
		<p>暂无文章</p>
	<?php endif; ?>
	 <?php comments_template(); ?> 
	</div>
	</div>
</div>
<?php get_footer(); ?>