<section id="nagrody" class="main">
    <div class="industry">
        <div class="container">
                <h2>Nagrody</h2>
            <div class="row">
                <?php $recent=new WP_Query( "category_name=nagroda"); while($recent->have_posts()) : $recent->the_post();?>
                <div class="6u">
                    <center><?php the_post_thumbnail( 'medium' ); ?> </center>
                    <?php the_content(); ?>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
