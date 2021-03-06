<?php
/*
    Template Name: About
*/
get_header(); 
?>

<section class="intro">
</section>

<section class="about">
    <div class="container">
        <h1 class="title is-1">About</h1>
        <div class="columns is-vcentered">
            <div class="column is-half">
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
            </div>
            <div class="column is-half has-text-centered">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
            ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer(); 
?>