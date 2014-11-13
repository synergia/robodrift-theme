<?php global $dm_settings; ?>

<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2><?php bloginfo( 'description' ); ?></h2>
						<p>Ideą zawodów jest propagowanie mechatroniki, robotyki, automatyki i innych
pokrewnych dziedzin techniki poprzez zawody. Celem zawodów jest także umożliwienie zawodnikom sprawdzenia się w
danej konkurencji, z utrzymaniem uczciwej rywalizacji oraz ducha zawodów i zasady
fair play. Dla zwycięzców przewidziane są nagrody.
</p>
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
								</section>
							</div>
                            <div class="clear"></div>
						</div>
                        <div class="row">
                            <div class="12u"><?php echo do_shortcode('[vsgmap address="strefa kultury studenckiej, Wrocław" width="100%"]'); ?></div></div>

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
