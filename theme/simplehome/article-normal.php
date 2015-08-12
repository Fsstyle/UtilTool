			<article class="article">
                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title(); ?></a></h1>
                
                <div class="content">
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
				} else if (get_post_meta($post->ID, "video_url_value", true)) {?>
                <!-- video format -->
                <div class="post-format-video">
                    	<div class="mejs-mediaelement">
						<!-- bilibili -->
                        <?php
							if (stripos(get_post_meta($post->ID, "video_url_value", true), 'hdslb.com') !== false) {
						?>
							<embed src="<?=(get_post_meta($post->ID, "video_url_value", true))?>" quality="high" width="100%" height="100%" align="middle" allowScriptAccess="never" allowFullScreen="true" flashvars="playMovie=true&auto=1" pluginspage="http://get.adobe.com/cn/flashplayer/" wmode="transparent" type="application/x-shockwave-flash"></embed>					
                        <!-- youku -->
						<?php
							} else if (stripos(get_post_meta($post->ID, "video_url_value", true), 'youku.com') !== false) {
						?>
							<p style="text-align: center;">
								<embed src="<?=(get_post_meta($post->ID, "video_url_value", true))?>" quality="high" width="100%" height="100%" align="middle" allowScriptAccess="never" allowFullScreen="true" allowNetworking="internal" autostart="0" type="application/x-shockwave-flash"></embed>
							</p>  
						<?php
							} else {
						?>
							<video class="wp-video-shortcode" style="width:100%;height:100%;" controls="controls" >
							<source src="<?=(get_post_meta($post->ID, "video_url_value", true))?>" type="video/mp4" />
							</video>
						<?php
							}
						?>
						</div>
                </div>
				<?php } else { ?>
            	<?php if ( has_post_thumbnail() ) { ?>
                <div class="feature-img">
                	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_post_thumbnail(); ?></a>
                </div>
				<?php }
				}?>
                <?php
					if (is_single() || is_page()) {
				?>
					<?php the_content(); ?>
                    <?php simplehome_link_pages(); ?>
					<div class="article-copyright"><i class="fa fa-share-alt"></i> 码字很辛苦，转载请注明来自<b><a href="<?php bloginfo('wpurl');?>"><?php bloginfo('name') ?></a></b>的<a href="<?php the_permalink();?>">《<?php the_title();?>》</a></div>
                <?php
					} else { the_excerpt(); }
				?>
                </div>
                <div class="article-info">
                    <i class="fa fa-calendar"></i> <?php the_time("Y-m-d");?> &nbsp; <i class="fa fa-map-marker"></i> 
					<?php
						the_category(',');
					?>
                </div>
                <?php if (!is_single() && !is_page()) { ?><div class="readmore"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>">+ 阅读全文</a></div><?php } ?>
            </article>