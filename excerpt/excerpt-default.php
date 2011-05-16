<?php

/**
 * @package anno
 * This file is part of the Annotum theme for WordPress
 * Built on the Carrington theme framework <http://carringtontheme.com>
 *
 * Copyright 2008-2010 Crowd Favorite, Ltd. All rights reserved. <http://crowdfavorite.com>
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>
<article <?php post_class('article article-short clearfix'); ?>>
	<?php cfct_template_file('content', 'header'); ?>
	<?php if (has_post_thumbnail()): ?>
		<a href="<?php the_permalink()l ?>"><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	<div class="content">
		<?php
		the_excerpt();
		?>
	</div><!--/content-->
</article>