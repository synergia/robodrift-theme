<section id="sponsorowane" class="main">
<div class="container sponsorowane-container">
<h2 class="sponsorowane">Współpraca</h2>
<?php
    $args = array(
        'post_type' => 'sponsorowane ',
        'category_name' => 'wspolpraca'
    );
    $products = new WP_Query( $args );
    if( $products->have_posts() ) {
      while( $products->have_posts() ) {
        $products->the_post();
        ?>
            <div class="wspolpraca">
                <a class="single-link" href="<?php the_title(); ?>">
				<?php the_post_thumbnail('full'); ?>
                </a>
            </div>
<?php
      }
    }
    else {
      echo 'Nic a nic';
    }
  ?>
</div>
<!--
<div class="container sponsorowane-container">
<h2 class="sponsorowane">Sponsorzy</h2>
<?php
    $args = array(
        'post_type' => 'sponsorowane ',
        'category_name' => 'sponsorzy'
    );
    $products = new WP_Query( $args );
    if( $products->have_posts() ) {
      while( $products->have_posts() ) {
        $products->the_post();
        ?>
            <div class="wspolpraca">
                <a class="single-link" href="<?php the_title(); ?>">
				<?php the_post_thumbnail('full'); ?>
                </a>
            </div>
<?php
      }
    }
    else {
      echo 'Nic a nic';
    }
  ?>
</div>
-->
</section>
