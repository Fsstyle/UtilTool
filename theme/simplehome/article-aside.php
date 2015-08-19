			<article class="article ">
            	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title() ?></a></h1>
            	<div class="aside">
                   <?php the_content(); ?>
				   <?php
						if (get_post_meta($post->ID, "music_url_value", true)) {
						?>
						<!-- music format -->
						<div class="post-format-audio">
							<div class="feature-img audio">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_post_thumbnail(); ?></a>
							  <?php } ?>  
							   <div class="audio-wrapper">
										<div class="me-wrap">
										<audio class="wp-audio-shortcode" preload="none" style="width: 100%">
										<source type="audio/mp3" src="<?php echo get_post_meta( $post->ID, 'music_url_value', true ); ?>">
										</audio>
										</div>
									</div>	
						</div>
						</div>
					<?php
						}
					?>
                </div>
                <div class="aside-info"><?php the_time("l");?>
                <?php 
					if (get_post_meta($post->ID, 'weather_value', true)!='') {
						$weather = get_weather();
				?>
                <div class="weather-name"><?=($weather[get_post_meta($post->ID, 'weather_value', true)])?></div>
                <div class="weather-box weather-<?=(get_post_meta($post->ID, 'weather_value', true))?>"></div>
                <?php
					}
				?>
                </div>
            </article>