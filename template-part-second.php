<section id="second" class="main">
				<header>
					<div class="container">
						<?php $recent=new WP_Query( "category_name=pojazdy");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h2><?php the_title(); ?></h2>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>

					</div>
				</header>
				<div class="content dark style3">
					<div class="container">
						<span class="image featured"><img src="images/pic07.jpg" alt="" /></span>
						<div class="row">
							<div class="6u">
						<?php $recent=new WP_Query( "category_name=pojazd1");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>
							</div>
							<div class="6u">
						<?php $recent=new WP_Query( "category_name=pojazd2");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
