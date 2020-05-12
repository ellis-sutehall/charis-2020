<?php
/*
    Template Name: Contact
*/
get_header(); 
?>

<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.978111150528!2d0.11598931599056063!3d52.20744526709729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d870be70ad0243%3A0xe7626653901f9fd5!2sAll%20Saints%20Garden%20Art%20%26%20Craft%20Market!5e0!3m2!1sen!2suk!4v1587478910357!5m2!1sen!2suk" width="" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<section class="contact">
    <div class="container">
        <h1 class="title is-1">Contact</h1>
        <div class="columns">
            <div class="column is-half">
                <?php echo do_shortcode( '[contact-form-7 id="21" title="Contact Form"]' ); ?>
            </div>
            <div class="column is-half">
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer(); 
?>