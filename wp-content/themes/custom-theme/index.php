<?php get_header(); ?>

<div class="blog-page">
    <div class="blog-page__items">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php endwhile; endif; ?>
    </div>

    <div class="blog-page__pagination">
        <?= paginate_links([
            'prev_text' => 'Previous',
            'next_text' => 'Next',
        ]) ?>
    </div>
</div>

<?php get_footer(); ?>