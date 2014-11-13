<section id="rejestracja" class="main">
				<header>
					<div class="container">
						<?php $recent=new WP_Query( "category_name=rejestracja");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h2><?php the_title(); ?></h2>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>

					</div>
				</header>
			</section>
