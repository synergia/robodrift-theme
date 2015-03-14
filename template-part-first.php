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
							<div class="8u">
								<section id="cardId" class="flipcard h">
                                    <div class="front">
                                        <img src="http://robo-drift.pwr.wroc.pl/wp-content/uploads/2014/01/Robo-drift041.jpg"/>
                                    </div>
                                    <div class="back">
                                        <a href="https://www.google.com/maps/place/hoena+wronskiego+12/"><img src="<?php echo get_template_directory_uri(); ?>/img/mapa.JPG" alt="Zobacz na Mapach Google"></a>
                                    </div>

								</section>
							</div>
							<div class="4u">
								<section>
                                    <header>
										<h3>Gdzie i kiedy?</h3>
									</header>
                                    <p>16 maja 2015 roku o 12:00 na parkingu Strefy Kultury Studenckiej Politechniki Wrocławskiej</p>
                                    <button class="button switch">Zobacz na mapie</button>
									<header>
									</header>
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
