<?php get_header(); ?>

<div class="index-page">
    <div class="index-page__items">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php endwhile; endif; ?>
    </div>

    <div class="index-page__pagination">
        <?= paginate_links([
            'prev_text' => 'Previous',
            'next_text' => 'Next',
        ]) ?>
    </div>
</div>

<?php get_footer(); ?>