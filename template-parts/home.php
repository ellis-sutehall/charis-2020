<?php
/*
    Template Name: Home Page
*/
get_header(); 
?>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-one-third is-offset-8">
                    <h1 class="title is-2">Handcrafted silver jewellery</h1>
                    <h4 class="title is-4">Bespoke sterling silver jewellery <br>Handmade in Cambridge</h4>
                    <a href="/shop" class="button is-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <button class="jump-down button is-secondary">
        <span class="icon is-large"><i class="fa fa-arrow-down"></i></span>
    </button>
</section>

<section id="latest" class="latest-products">
    <div class="container">
        <h2 class="title is-2 has-text-centered">Latest Products</h2>
        <div class="columns is-centered is-multiline">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'desc',
                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="column is-half-tablet is-one-quarter-desktop">
                    <?php
                        $product = wc_get_product(get_the_ID());
                        ?>
                        <a href="<?= $product->get_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                        </a>
                        <?php
                        // var_dump($product);
                    ?>
                    </div>
                        <?php
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section class="cta earrings">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <h2 class="title is-2">View all the latest earrings</h2>
                <h4 class="title is-4">Handmade sterling silver earrings. <br> Various styles and designs to suit every occasion.</h4>
                <a href="/shop/category/earrings" class="button is-primary ">View Earrings</a>
            </div>
            <div class="column is-hidden-tablet is-hidden-desktop"></div>
        </div>
    </div>
</section>

<section class="featured">
    <div class="container">
        <h2 class="title is-2 has-text-centered">Featured</h2>
        <div class="columns is-centered">
            <div class="column is-10">
                <div class="columns">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'product_tag' => 'featured',
                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="column is-half has-text-centered">
                    <?php
                        $product = wc_get_product(get_the_ID());
                        ?>
                        <a href="<?= $product->get_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                        </a>
                        <a class="product-link" href="<?= $product->get_permalink(); ?>">
                            <h4 class="title is-4"><?= $product->get_title(); ?></h4>
                        </a>
                        <!-- <p><?php // echo $product->get_short_description(); ?></p> -->
                        <!-- <p>£<?php // $product->get_price(); ?></p> -->
                        <?php
                        // var_dump($product);
                    ?>
                    </div>
                        <?php
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="cta content-right bangles">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-8">
                <h2 class="title is-2">View all bangles</h2>
                <h4 class="title is-4">Handmade sterling silver bangles. <br> Various styles and shapes to suit everyone.</h4>
                <a href="/shop/category/bangles" class="button is-primary ">View Bangles</a>
            </div>
            <div class="column is-hidden-tablet is-hidden-desktop"></div>
        </div>
    </div>
</section>

<?php // Update this to be more dynamic, ACF? ?>
<section class="collection">
    <div class="container has-text-centered">
        <h2 class="title is-2">The Summer Collection</h2>
        <h4 class="title is-4">View the new Summer Collection</h4>
        <div class="columns">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'desc',
                    'product_tag' => 'summer',
                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="column is-one-third">
                    <?php
                        $product = wc_get_product(get_the_ID());
                        ?>
                        <a href="<?= $product->get_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                        </a>
                        <?php
                        // var_dump($product);
                    ?>
                    </div>
                        <?php
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
            
        </div>
    </div>
</section>

<section class="instagram">
    <div class="container">
        <?php echo do_shortcode('[instagram-feed]'); ?>
    </div>
</section>

<?php
    get_footer(); 
?>