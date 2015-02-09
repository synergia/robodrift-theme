<?php global $dm_settings; ?>

<section id="second" class="main">
				<header>
					<div class="container" id="regulamin">
						<?php $recent=new WP_Query( "category_name=pojazdy");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h2><?php the_title(); ?></h2>
                        <br>
                        <a href="<?php echo $dm_settings['link_do_regulaminu'] ?>" class="button">Pobierz regulamin</a>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>
					</div>
				</header>
				<div class="content dark style3" id="category">
					<div class="container">
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
