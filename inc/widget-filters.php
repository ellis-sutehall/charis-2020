<section class="widget-filters">
    <div class="container">
        <div class="columns">
        <?php
            if(is_active_sidebar('filter')){
                dynamic_sidebar('filter');
            }
        ?>            
        </div>
    </div>
</section>
