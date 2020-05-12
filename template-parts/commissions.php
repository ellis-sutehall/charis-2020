<?php
/*
    Template Name: Commissions
*/
get_header(); 
?>

<section class="commissions">
    <div class="container">
        <h1 class="title is-1 has-text-centered">Commissions</h1>
        <div class="columns is-vcentered">
            
            <div class="column is-4 has-text-centered">
                <img src="<?php echo get_template_directory_uri() . '/dist/img/commission-01.jpg'; ?>" alt="">
                <h2 class="title is-4">Fine Materials</h2>
                <p>Silver, gold, gems &mdash; I provide a variety of options</p>
            </div>
            
            <div class="column is-4 has-text-centered">
                <img src="<?php echo get_template_directory_uri() . '/dist/img/commission-02.jpg'; ?>" alt="">
                <h2 class="title is-4">Unique Creations</h2>
                <p>I can create a unique design that matches your personality</p>
            </div>
            
            <div class="column is-4 has-text-centered">
                <img src="<?php echo get_template_directory_uri() . '/dist/img/commission-03.jpg'; ?>" alt="">
                <h2 class="title is-4">Regular Updates</h2>
                <p>I can give you regular updates about the progress of your commission</p>
            </div>
        </div>
        <div class="columns has-text-centered"> 
            <div class="column is-12">
                <h2 class="title is-2">Ready?</h2>
                <h4 class="title is-4">Get in touch to start discussing your bespoke piece today</h4>
                <a href="/contact" class="button is-primary">Get in touch</a>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer(); 
?>