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
                    <h1 class="title is-2">Charis Sutehall Jewellery</h1>
                    <h4 class="title is-4">Bespoke Sterling Silver Jewellery <br>Handmade in Cambridge</h4>
                    <a href="/shop" class="button is-link is-outlined">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-products">
    <div class="container">
        <h2 class="title is-2 has-text-centered">Latest Products</h2>
        <div class="columns is-centered">
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
                    <div class="column is-quarter">
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

<section class="cta">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <h2 class="title is-2">View all the latest earrings</h2>
                <h4 class="title is-4">Handmade Sterling Silver Earrings. Various styles and designs to suit every occasion. From plant-inspired to insect wings I’m sure there’s something you’ll love.</h4>
                <a href="/shop/category/earrings" class="button is-link is-primary is-outlined">Shop Now</a>
            </div>
            <div class="column is-hidden-desktop-only"></div>
        </div>
    </div>
</section>

<section class="featured">
    <div class="container">
        <h2 class="title is-2 has-text-centered">Featured</h2>
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
                        <h6 class="title is-5"><?php echo $product->get_short_description(); ?></h6>
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
</section>

<section class="cta content-right">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-8">
                <h2 class="title is-2">Big Enticing Headline</h2>
                <h4 class="title is-4">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </h4>
                <a href="/shop/category/bangles" class="button is-link is-primary is-outlined">Shop Now</a>
            </div>
            <div class="column is-hidden-desktop-only"></div>
        </div>
    </div>
</section>

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
                    'product_tag' => 'collection',
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

<?php
    get_footer(); 
?>