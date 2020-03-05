<?php get_header(); ?>
<div class="content-box">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?=strtoupper(get_the_title())?></h2>
        <?php $content = str_replace('<p>', '<p class="content-box_paragraph">', get_the_content()); ?>
        <?=$content?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
