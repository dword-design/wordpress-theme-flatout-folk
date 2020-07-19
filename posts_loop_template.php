<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Start of Post Wrap -->
<div class="post hentry ivycat-post">
	<!-- This is the output of the post TITLE -->
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<span class="entry-date"><?php the_date(); ?>, <?php the_time(); ?></span>
	<div style="clear: both" />

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>
<!-- // End of Post Wrap -->
