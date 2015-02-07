<?php global $dm_settings; ?>

<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
					<?php $recent=new WP_Query( "category_name=o-zawodach");
                                          while($recent->have_posts()) : $recent->the_post();?>
										<h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                        <?php endwhile; ?>
					</div>
				</header>
				<div class="content dark style1 featured" id="firstdet">
					<div class="container">
						<div class="row">
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="icon fa-calendar"></span></span>
                                    <?php $recent=new WP_Query( "category_name=czas");
                                          while($recent->have_posts()) : $recent->the_post();?>
									<header>
										<h3><?php the_title(); ?></h3>
									</header>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>

								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="icon fa-file-o"></span></span>
									<header>
										<h3>Regulamin</h3>
									</header>
									<a href="<?php echo $dm_settings['link_do_regulaminu'] ?>" class="button">Pobierz</a>
								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="icon fa-map-marker"></span></span>
									<?php $recent=new WP_Query( "category_name=miejsce");
                                          while($recent->have_posts()) : $recent->the_post();?>
									<header>
										<h3><?php the_title(); ?></h3>
									</header>
                                        <?php the_content(); ?>
                                    <?php endwhile; ?>
                                    <a id="demo" class="button" href="#modal-content">Mapa</a>

                                    <div id="modal-content" class="pop-up-display-content">
                                        <?php echo do_shortcode('[vsgmap address="strefa kultury studenckiej, Wrocław" width="100%"]'); ?>
                                    </div>
								</section>
							</div>
                            <div class="clear"></div>
						</div>
						<div class="row">
							<div class="12u">
								<footer>
									        <a href="#second" class="no-border-bottom">
                                                <i class="fa fa-4x fa-angle-down"></i>
                                            </a>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</section>
